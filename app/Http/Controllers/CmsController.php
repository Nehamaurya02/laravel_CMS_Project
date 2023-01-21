<?php

namespace App\Http\Controllers;
use App\Models\registerModel;
use App\Models\imageModel;
use Mail;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function vission()
    {
        return view('vission');
    }
    public function myMail(Request $req)
    {
        $email=$req->get("email");
        $sb=$req->get("subj");
        $data=array('email'=>$email,'subj'=>$sb);
        Mail::send('vission',$data,function($message) use($data){
            $message->to ($data["email"],'CMS Montessori School Portal')->subject($data["subj"]);
            $message->from('juhimaurya92@gmail.com','Neha Maurya');
        });
        echo "<script>alert('Mail send');window.location.href='/MailPage'</script>";
    }
    public function MailPage()
    {
        return view('MailPage');
    }

    ///simple mail
    public function smail()
    {
        $pin=mt_rand(121, 145). mt_rand(123, 295);
        $string=str_shuffle($pin);

        $data=array("email"=>"mauryvanshi111@gmail.com");
        Mail::raw('Your OTP -'.$string. 'from school Management Portel . Dont share this OTP',function($message) use($data){
            $message->from('juhimaurya92@gmail.com','social Team');
            $message->to ($data["email"]);
            $message->subject('forgate password');
        });
        echo "OTP send on " .$data["email"]. " Mail successfully";
    }
    public function Aheader()
    {
        return view('Admin/Aheader');
    }
    public function Afooter()
    {
        return view('Admin/Afooter');
    }
    public function Register()
    {
        return view('Registration');
    }
    //save Recored in database
    public function savaRegister(Request $request){
        $request->validate(
            [
                'roll'=>'required',
                'name'=>'required',
                'fname'=>'required',
                'email'=>'required|email',
                'mobile'=>'required',
                'branch'=>'required',
                'course'=>'required',
            ]
            );
        try{
            $enq=new registerModel;
            $enq->Enrollment=$request->get("roll");
            $enq->Name=$request->get("name");
            $enq->Fname=$request->get("fname");
            $enq->Email=$request->get("email");
            $enq->Mobile=$request->get("mobile");
            $enq->Branch=$request->get("branch");
            $enq->Cource=$request->get("course");
            $enq->save();
            echo "<script>alert('Registration Successfully');window.location,href='/Registration'</script>";
        }
        catch(Exception $ex)
        {
            echo "<script>alert('Registration not successfully');window.location.href='/Registration'</script>";
        }
    }
    //add image gallery
    public function Image()
    {
        return view('Admin/image_gallery');
    }
    //store image
    public function storeImage(Request $request)
    {
        $data=new imageModel;
        if($request->file('img')){
            $file=$request->file('img'); //img form inputbox name
            $filename=$file->getClientOriginalName();
            $file->move(public_path('images'),$filename);  //images folder name
            $data->Image=$filename;  //Image Collumn name
        }
        $data->save();
       return redirect()->route('images.view');
    }
    //display data from database
    public function viewImage()
    {
        $imageData=imageModel::all();
        return view('Admin/image_management',compact('imageData'));
    } 
}
