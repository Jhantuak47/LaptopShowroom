<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product as ProductModel;
use App\Models\Brand as BrandModel;
use App\Models\Category as CategoryModel;

use App\Services\Products\ProductsFacade as Products;
use App\Models\Image as ImageModel;
use Validator;
use Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        $productWithDetails = Products::getProductsWithDetail();
        $brands = BrandModel::all();
        $categories = CategoryModel::all();
        if($request->ajax()){
              return Products::getProductsTemplate($productWithDetails);
         }
        return view('product.index',compact('brands','categories'))
                ->with('products',$productWithDetails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // return response()->json(['status'=>'success', 'data'=>[$request->file('imgUrl'),$_FILES, $request->all()] ]);
        $validator = Validator::make($request->all(),[
                'imgUrl'    => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validator->passes()){

            $file = $request->file('imgUrl');
            $currentTimestamp = now()->timestamp;

            $fileNameWithExt  = $file->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = pathinfo($fileNameWithExt, PATHINFO_EXTENSION);

            $fileNameToSave = $filename . $currentTimestamp . '.' . $extension;

            $fileSize = $file->getClientSize();
            try {
                
                $file->storeAs('public/admin/images', $fileNameToSave);


                $product = ProductModel::updateOrCreate(
                    ['name' => $request->p_name],
                    ['brand_id'=>$request->b_id,
                     'category_id'=>$request->cat_id,
                     'price'=>$request->price,
                     'manufacturer'=>$request->maf,
                     'avl_stock'=>$request->qty,
                     'type'=>$request->type,
                     'img_url'=>$fileNameToSave,
                     'description'=>$request->desc
                    ]
                );
                if($product){

                    // $image = new ImageModel();
                    // $image->pro_id      = $product->id;
                    // $image->img_url     = $fileNameToSave;
                    // $image->img_size    = $fileSize;
                    // $flag               = $image->save();

                    // Log::info("flag");
                    // Log::info(var_dump($flag));
                    // if($flag)
                        $message = [
                            'status'        =>  1,
                            'message'       =>  'congratulation new product is added !',
                            'class_name'    =>  'alert-success'
                        ];
                }

            } catch (\Exception $e) {

                $message = [
                    'status'        => 0, 
                    'message'       => $e->getMessage(), 
                    'class_name'    =>  'alert-danger'
                ];
            }

        }else{

           $message = [
                    'message'       =>  $validator->errors()->all(),
                    'class_name'    =>  'alert-danger',
                    'status'        =>  0
           ];
        }      

        if($request->ajax())
            return response()->json($message,$message['status']?200:500);
            
            $products = Products::getProductsWithDetail();
            $brands = BrandModel::all();
            $categories = CategoryModel::all();
        return view('product.index',compact('brands','categories','products'))
                ->with('message.level',($message['status']?'success':'danger'))
                ->with('message.content',$message['message']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
