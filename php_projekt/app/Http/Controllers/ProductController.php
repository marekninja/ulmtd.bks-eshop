<?php

namespace App\Http\Controllers;

use App\MainCat;
use App\Maker;
use App\Product;
use App\Size;
use App\SizeProduct;
use App\Subcat;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function edit($id)
    {

        $product = Product::withTrashed()->find($id);

//        $product =

        return response()->json($product);
    }

    public function update(Request $request, Product $product)
    {
        // validations and error handling is up to you!!! ;)
        $request->validate([
            'prodMeno' => 'required|min:3',
            'prodPopis' => 'required',
            'prodCena' => 'numeric',
        ]);

//        if ($product->image_id != 13){
//            $id = $product->image_id;
//            $image = \App\Image::find($id);
//            $imageFull = public_path($image->link_full);
//            $image200 = public_path($image->link_prev_200w);
//            $image300 = public_path($image->link_prev_300w);
//            $image575 = public_path($image->link_prev_575w);
//            $image767 = public_path($image->link_prev_767w);
//            $image991 = public_path($image->link_prev_991w);
//            $image1300 = public_path($image->link_prev_1300w);
//
//            unlink($image200);
//            unlink($image300);
//            unlink($image575);
//            unlink($image767);
//            unlink($image991);
//            unlink($image1300);
//            unlink($imageFull);
//
//            $image->delete();
//        }

        $oldId = $product->image_id;

        $product->mainCat_id = $request->prodMainCat['id'];
        $product->subCat_id = $request->prodSubCat['id'];
        $product->popis = $request->prodPopis;
        $product->vyrobca_id = $request->prodMaker['id'];
        $product->image_id = $request->prodImageId;
        $product->cena = $request->prodCena;
        $product->ram = $request->prodRam;
        $product->vidlica = $request->prodVidlica;
        $product->tlmic = $request->prodTlmic;
        $product->kolesa = $request->prodKolesa;
        $product->predny_plast = $request->prodPrednyPlast;
        $product->zadny_plast = $request->prodZadnyPlast;
        $product->brzdy = $request->prodBrzdy;
        $product->kluky = $request->prodKluky;
        $product->stredove_zlozenie = $request->prodStredove;
        $product->radenie = $request->prodRadenie;
        $product->prehadzovac = $request->prodPrehadzovac;
        $product->kazeta = $request->prodKazeta;
        $product->retaz = $request->prodRetaz;
        $product->napinak_retaze = $request->prodNapinak;
        $product->sedlovka = $request->prodSedlovka;
        $product->sedlo = $request->prodSedlo;
        $product->predstavec = $request->prodPredstavec;
        $product->riadidla = $request->prodRiadidla;
        $product->gripy = $request->prodGripy;
        $product->hlavove_zlozenie = $request->prodHlavove;
        $pedale = 'nie sú súčasťou';
        if ($request->pedale != ''){
            $pedale = $request->prodPedale;
        }
        $product->pedale = $pedale;
        $product->vaha = $request->prodVaha;
        $product->farba = $request->prodFarba;
        $product->name = $request->prodMeno;
        $product->extra = $request->prodExtra;
        $product->naboje = $request->prodNaboje;
//        $product->cena = $request->prodCena;
        $product->save();

        if ($oldId != 13 and $oldId != $request->prodImageId){
            $id = $oldId;
            $image = \App\Image::find($id);
            $imageFull = public_path($image->link_full);
            $image200 = public_path($image->link_prev_200w);
            $image300 = public_path($image->link_prev_300w);
            $image575 = public_path($image->link_prev_575w);
            $image767 = public_path($image->link_prev_767w);
            $image991 = public_path($image->link_prev_991w);
            $image1300 = public_path($image->link_prev_1300w);

            unlink($image200);
            unlink($image300);
            unlink($image575);
            unlink($image767);
            unlink($image991);
            unlink($image1300);
            unlink($imageFull);

            $image->delete();
        }

    }



//    public function list($page) {
//        return Product::all()->toJson(JSON_PRETTY_PRINT);
//    }

    public function list($page) {
        // get rowsPerPage from query parameters (after ?), if not set => 5
        $rowsPerPage = request('rowsPerPage', 5);

        // get sortBy from query parameters (after ?), if not set => name
        $sortBy = request('sortBy', 'name');

        // get descending from query parameters (after ?), if not set => false
        $descendingBool = request('descending', 'false');
        // convert descending true|false -> desc|asc
        $descending = $descendingBool === 'true' ? 'desc' : 'asc';

        // pagination
        // IFF rowsPerPage == 0, load ALL rows
        if ($rowsPerPage == 0) {
            // load all products from DB
            $products = DB::table('products')
                ->orderBy($sortBy, $descending)
                ->get();
        } else {
            $offset = ($page - 1) * $rowsPerPage;

            // load products from DB
            $products = DB::table('products')
                ->orderBy($sortBy, $descending)
                ->offset($offset)
                ->limit($rowsPerPage)
                ->get();
        }

        // total number of rows -> for quasar data table pagination
        $rowsNumber = DB::table('products')->count();

        return response()->json(['rows' => $products, 'rowsNumber' => $rowsNumber]);
    }

    public function destroy(Product $product)
    {
        $imageId = $product->image_id;
        $product->image_id = 13;
        $product->save();

        $product->delete();

        if ($imageId != 13){
            $image = \App\Image::find($imageId);
            $imageFull = public_path($image->link_full);
            $image200 = public_path($image->link_prev_200w);
            $image300 = public_path($image->link_prev_300w);
            $image575 = public_path($image->link_prev_575w);
            $image767 = public_path($image->link_prev_767w);
            $image991 = public_path($image->link_prev_991w);
            $image1300 = public_path($image->link_prev_1300w);

            unlink($image200);
            unlink($image300);
            unlink($image575);
            unlink($image767);
            unlink($image991);
            unlink($image1300);
            unlink($imageFull);

            $image->delete();
        }



        return response()->json(['status'=>'success','msg' => 'Product deleted successfully']);
    }

    public function store(Request $request)
    {
        // validations and error handling is up to you!!! ;)

        $request->validate([
            'prodMeno' => 'required|min:3',
            'prodPopis' => 'required',
            'prodCena' => 'numeric',
        ]);


//        $product = Product::find(33)->id;

//        return response()->json(['id' => json_encode($product)]);

        //echo $request;

        $details = $request;
//        Log::info('Received request details: '.json_encode($request->attributes));
        $product = Product::create([
            'mainCat_id' => $details->prodMainCat['id'],
            'subCat_id' => $details->prodSubCat['id'],
            'image_id' => $details->prodImageId,
            'popis' => $details->prodPopis,
            'vyrobca_id' => $details->prodMaker['id'],
            'cena' => $details->prodCena,
            'ram' => $details->prodRam,
            'vidlica' => $details->prodVidlica,
            'tlmic' => $details->prodTlmic,
            'kolesa' => $details->prodKolesa,
            'predny_plast' => $details->prodPrednyPlast,
            'zadny_plast' => $details->prodZadnyPlast,
            'brzdy' => $details->prodBrzdy,
            'kluky' => $details->prodKluky,
            'stredove_zlozenie' => $details->prodStredove,
            'radenie' => $details->prodRadenie,
            'prehadzovac' => $details->prodPrehadzovac,
            'kazeta' => $details->prodKazeta,
            'retaz' => $details->prodRetaz,
            'napinak_retaze' => $details->prodNapinak,
            'sedlovka' => $details->prodSedlovka,
            'sedlo' => $details->prodSedlo,
            'predstavec' => $details->prodPredstavec,
            'riadidla' => $details->prodRiadidla,
            'gripy' => $details->prodGripy,
            'hlavove_zlozenie' => $details->prodHlavove,
            'pedale' => $details->prodPedale,
            'vaha' => $details->prodVaha,
            'farba' => $details->prodFarba,
            'name' => $details->prodMeno,
            'extra' => $details->prodExtra,
            'naboje' => $details->prodNaboje,
        ]);

        Log::info('Sent sizes encode:'.json_encode($request->prodSizes));

        Log::info('Sizes foreach');
        $json = $request->prodSizes;
        foreach ( $json as $size){
            Log::info('Out: '.json_encode($size));
            SizeProduct::create([
                'product_id' => $product->id,
                'size_id'=> $size['id'],
            ]);
        }

//        Log::info('Product to post: '.json_encode($product));
//        Log::info('Response sent: '.response()->json(['id' => json_encode($product)]));

        return response()->json(['id' => json_encode($product->id)]);
//        return response()->exception('fekete');
    }

    public function makers(){
        $makers = Maker::all();
        return response()->json(['rows' => $makers]);
    }

    public function sizes(){
        $makers = Size::all();
        return response()->json(['rows' => $makers]);
    }

    public function maincats(){
        $makers = MainCat::all();
        return response()->json(['rows' => $makers]);
    }

    public function subcats($mainCat){
        $makers = Subcat::where('main_cat_id',$mainCat)->get();
        return response()->json(['rows' => $makers]);
    }

    public function upload(Request $request){
//        $imageName = time().'.'.$request->image->getClientOriginalExtension();
//        $request->image->move(public_path('images'), $imageName);

//        $file = $request->image->store('pics');
//            $path = Storage::putFile('images', $request->file('image'));
//        $file = $request->all();
        //Log::info('Received request details from uploader: '.$request->form);
//        Log::info('Received request details from uploader: '. json_encode($request));
//        Log::info('Received request details from uploader: and data prodId'.$request->prodId .' and prodId '.$request->prodId);
//        return;
//
//        return response()->json(['id' => 5]);

//        return;

        $image = $request->file('image');
        $prodId = $request->prodId;


        $file = $image->getClientOriginalName();
        $filename = uniqid();
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        $imageFull = Image::make($image->getRealPath());
        $image200 = Image::make($image->getRealPath())->resize(200,null,function ($constraint) {
            $constraint->aspectRatio();
        });
        $image300 = Image::make($image->getRealPath())->resize(300,null,function ($constraint) {
            $constraint->aspectRatio();
        });
        $image575 = Image::make($image->getRealPath())->resize(575,null,function ($constraint) {
            $constraint->aspectRatio();
        });
        $image767 = Image::make($image->getRealPath())->resize(767,null,function ($constraint) {
            $constraint->aspectRatio();
        });
        $image991 = Image::make($image->getRealPath())->resize(991,null,function ($constraint) {
            $constraint->aspectRatio();
        });
        $image1300 = Image::make($image->getRealPath())->resize(1300,null,function ($constraint) {
            $constraint->aspectRatio();
        });
        $imageFullpath = '/pics/'.$filename.'-full.'.$extension;
        $image200path = '/pics/'.$filename.'-200w.'.$extension;
        $image300path = '/pics/'.$filename.'-300w.'.$extension;
        $image575path = '/pics/'.$filename.'-575w.'.$extension;
        $image767path = '/pics/'.$filename.'-767w.'.$extension;
        $image991path = '/pics/'.$filename.'-991w.'.$extension;
        $image1300path = '/pics/'.$filename.'-1300w.'.$extension;
        $imageFull->save(public_path($imageFullpath));
        $image200->save(public_path($image200path));
        $image300->save(public_path($image300path));
        $image575->save(public_path($image575path));
        $image767->save(public_path($image767path));
        $image991->save(public_path($image991path));
        $image1300->save(public_path($image1300path));


        $uploaded = \App\Image::create([
            'link_prev_200w' => $image200path,
            'link_prev_300w' =>$image300path,
            'link_prev_575w'=>$image575path,
            'link_prev_767w'=>$image767path,
            'link_prev_991w'=>$image991path,
            'link_prev_1300w'=>$image1300path,
            'link_full'=>$imageFullpath,
        ]);
        return response()->json(['id' => $uploaded->id]);

//        return response()->json(['succes'=>'file:'.$file.' uploaded into '.public_path('pics/')]);
//        if (isset($file)){
//            return response()->json(['success'=>'You have successfully upload image.']);
//
//        }
//        return response()->json(['success'=>'You have successfully upload image.']);
    }

    public function serveImage($id){
        Log::info('Request to get image: '.$id);

//        Image::make('cesta ku obrazku')->response('jpg');
        $image = \App\Image::find($id);
        return response()->file(public_path($image->link_full));
//        return Image::make(public_path(''/pics/'.$filename.'-full.'.$extension'))->response('');
    }

    public function destroyImage($id){

        Log::info('Image to delete: '.$id);

        if ($id == 13){
            echo 'can not delete "no image" image';
            Log::info('did not delete: '.$id);

            return Response::json(array(
                'code'      =>  405,
                'message'   =>  'can not delete "no id" image',
            ), 405);
        }

//        $imageFullpath = '/pics/'.$filename.'-full.'.$extension;
//        $image200path = '/pics/'.$filename.'-200w.'.$extension;
//        $image300path = '/pics/'.$filename.'-300w.'.$extension;
//        $image575path = '/pics/'.$filename.'-575w.'.$extension;
//        $image767path = '/pics/'.$filename.'-767w.'.$extension;
//        $image991path = '/pics/'.$filename.'-991w.'.$extension;
//        $image1300path = '/pics/'.$filename.'-1300w.'.$extension;
        $image = \App\Image::find($id);
        $imageFull = public_path($image->link_full);
        $image200 = public_path($image->link_prev_200w);
        $image300 = public_path($image->link_prev_300w);
        $image575 = public_path($image->link_prev_575w);
        $image767 = public_path($image->link_prev_767w);
        $image991 = public_path($image->link_prev_991w);
        $image1300 = public_path($image->link_prev_1300w);

        unlink($image200);
        unlink($image300);
        unlink($image575);
        unlink($image767);
        unlink($image991);
        unlink($image1300);
        unlink($imageFull);

        $prod = Product::find(request('productId'));

        $prod->image_id = 13;
        $prod->save();

        $image->delete();



        $resp = \App\Image::find(13);

        return response()->json(['status'=>'success','msg' => 'Image deleted successfully', 'deleted' => $resp->id]);
    }


//    public function sizes(){
//        $makers = Size::all();
//        return response()->json(['rows' => $makers]);
//    }


}
