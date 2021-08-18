<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Device;

class DeviceController extends Controller
{
    public function save_comment(Request $request){
        $device=Device::findOrFail($request->id);
        $device->opinions()->create([
            'user_id'=>auth()->id(),
            'body'=>$request->body
        ]);
        return redirect()->back();
    }

    private function readCSV($csvFile, $array)
{
    $file_handle = fopen($csvFile, 'r');
    while (!feof($file_handle)) {
        $line_of_text[] = fgetcsv($file_handle, 0, $array['delimiter']);
    }
    fclose($file_handle);
    return $line_of_text;
}
private function getBrandId($title){
    $brand= Brand::where('title',$title)->first();
    if($brand==null){
        $brand=Brand::create(['title'=>$title]);
    }
    return $brand->id;
}
public function import(){
        $csvFileName = "gsm.csv";
        $csvFile = public_path('' . $csvFileName);
        $data= $this->readCSV($csvFile,array('delimiter' => ','));
        unset($data[0]);
        // dd($data);
        $rows=[];
        foreach($data as $row){
            //Parsing Network Data
            $r=[];
            $network=[];
            if($row[83]!=""){
                $network['Network'] = $row[83];
            }
            if($row[2]!=""){
                $network['Technology']=$row[2];
            }
            if($row[3]!=""){
                $network['2G bands']=$row[3];
            }
            if($row[35]!=""){
                $network['3G bands']=$row[35];
            }
            if($row[47]!=""){
                $network['4G bands']=$row[47];
            }
            if($row[66]!=""){
                $network['5G bands']=$row[66];
            }
            if($row[4]!=""){
                $network['GPRS']=$row[4];
            }
            if($row[5]!=""){
                $network['EDGE']=$row[5];
            }
            if($row[36]!=""){
                $network['Speed']=$row[36];
            }
            
            if($network!=[]){
                $r['NETWORK']=$network;
            }
            
            //Parsing Launch Data
            $launch=[];
            if($row[6]!=""){
                $launch['Announced']=$row[6];
            }
            if($row[7]!=""){
                $launch['Status']=$row[7];
            }
            if($launch!=[]){
                $r['LAUNCH']=$launch;
            }

            //Parsing Body Data
            $body=[];
            if($row[46]!=""){
                $body['Body']=$row[46];
            }
            if($row[8]!=""){
                $body['Dimensions']=$row[8];
            }
            if($row[9]!=""){
                $body['Weight']=$row[9];
            }
            if($row[10]!=""){
                $body['Sim']=$row[10];
            }
            if($row[48]!=""){
                $body['Build']=$row[48];
            }
            if($row[73]!=""){
                $body['Keyboard']=$row[73];
            }

            if($body!=[]){
                $r['BODY']=$body;
            }
            //Parsing Display Data
            $display=[];
            if($row[14]!=""){
                $display['Display']=$row[14];
            }
            if($row[11]!=""){
                $display['Type']=$row[11];
            }
            if($row[12]!=""){
                $display['Size']=$row[12];
            }
            if($row[13]!=""){
                $display['Resolution']=$row[13];
            }
            if($row[49]!=""){
                $display['Protection']=$row[49];
            }
            if($display!=[]){
                $r['DISPLAY']=$display;
            }

            //Parsing Platform Data
            $platform=[];
            if($row[37]!=""){
                $platform['OS']=$row[37];
            }
            if($row[38]!=""){
                $platform['Chipset']=$row[38];
            }
            if($row[39]!=""){
                $platform['CPU']=$row[39];
            }
            if($row[40]!=""){
                $platform['GPU']=$row[40];
            }
            if($platform!=[]){
                $r['PLATFORM']=$platform;
            }
            //Parsing Memory Data
            $memory=[];
            if($row[50]!=""){
                $memory['Memory']=$row[50];
            }
            if($row[15]!=""){
                $memory['Card slot']=$row[15];
            }
            if($row[16]!=""){
                $memory['Phonebook']=$row[16];
            }
            if($row[17]!=""){
                $memory['Call records']=$row[17];
            }
            if($row[41]!=""){
                $memory['Internal']=$row[41];
            }
            if($memory!=[]){
                $r['MEMORY']=$memory;
            }
            //Parsing Main Camera Data
            $main_camera=[];
            if($row[81]!=""){
                $main_camera['Camera']=$row[81];
            }
            if($row[82]!=""){
                $main_camera['Main Camera']=$row[82];
            }
            if($row[79]!=""){
                $main_camera['V1']=$row[79];
            }
            if($row[42]!=""){
                $main_camera['Single']=$row[42];
            }
            if($row[43]!=""){
                $main_camera['Video']=$row[43];
            }
            if($row[45]!=""){
                $main_camera['Features']=$row[45];
            }
            if($row[51]!=""){
                $main_camera['Dual']=$row[51];
            }
            if($row[68]!=""){
                $main_camera['Triple']=$row[68];
            }
            if($row[67]!=""){
                $main_camera['Quad']=$row[67];
            }
            if($row[71]!=""){
                $main_camera['Five']=$row[71];
            }
            if($row[76]!=""){
                $main_camera['Dual or Triple']=$row[76];
            }
            if($main_camera!=[]){
                $r['MAIN CAMERA']=$main_camera;
            }
            //Parsing Selfie Camera Data
            $selfie_camera=[];
            if($row[50]!=""){
                $selfie_camera['Selfie camera']=$row[50];
            }
            if($row[53]!=""){
                $selfie_camera['Features']=$row[53];
            }
            if($row[54]!=""){
                $selfie_camera['Video']=$row[54];
            }
            if($row[64]!=""){
                $selfie_camera['Single']=$row[64];
            }
            if($row[52]!=""){
                $selfie_camera['Dual']=$row[52];
            }
            if($row[78]!=""){
                $selfie_camera['Triple']=$row[78];
            }
            if($selfie_camera!=[]){
                $r['SELFIE CAMERA']=$selfie_camera;
            }
            //Parsing Sound Data
            $sound=[];
            if($row[69]!=""){
                $sound['Sound']=$row[69];
            }
            if($row[18]!=""){
                $sound['Loudspeaker']=$row[18];
            }
            if($row[19]!=""){
                $sound['Alert types']=$row[19];
            }
            if($row[20]!=""){
                $sound['3.5mm jack']=$row[20];
            }
            if($sound!=[]){
                $r['SOUND']=$sound;
            }
            //Parsing Comms Data
            $comms=[];
            if($row[21]!=""){
                $comms['WLAN']=$row[21];
            }
            if($row[22]!=""){
                $comms['Bluetooth']=$row[22];
            }
            if($row[23]!=""){
                $comms['GPS']=$row[23];
            }
            if($row[24]!=""){
                $comms['Radio']=$row[24];
            }
            if($row[25]!=""){
                $comms['USB']=$row[25];
            }
            if($row[55]!=""){
                $comms['NFC']=$row[55];
            }
            if($row[65]!=""){
                $comms['Infrared port']=$row[65];
            }
            if($comms!=[]){
                $r['COMMS']=$comms;
            }
            //Parsing Features Data
            $features=[];
            if($row[33]!=""){
                $features['Features']=$row[33];
            }
            if($row[26]!=""){
                $features['Sensors']=$row[26];
            }
            if($row[27]!=""){
                $features['Messaging']=$row[27];
            }
            if($row[28]!=""){
                $features['Browser']=$row[28];
            }
            if($row[29]!=""){
                $features['Clock']=$row[29];
            }
            if($row[30]!=""){
                $features['Alarm']=$row[30];
            }
            if($row[31]!=""){
                $features['Games']=$row[31];
            }
            if($row[32]!=""){
                $features['Java']=$row[32];
            }
            if($row[72]!=""){
                $features['Languages']=$row[72];
            }

            if($features!=[]){
                $r['FEATURES']=$features;
            }
            //Parsing Battery Data
            $battary=[];
            if($row[75]!=""){
                $battary['Battary']=$row[75];
            }
            if($row[56]!=""){
                $battary['Charging']=$row[56];
            }
            if($row[77]!=""){
                $battary['Music play']=$row[77];
            }
            if($row[84]!=""){
                $battary['Talk time']=$row[84];
            }
            if($row[85]!=""){
                $battary['Stand by']=$row[85];
            }
            if($battary!=[]){
                $r['BATTARY']=$battary;
            }
            //Parsing Test Data
            $test=[];
            if($row[58]!=""){
                $test['Performance']=$row[58];
            }
            if($row[59]!=""){
                $test['Camera']=$row[59];
            }
            if($row[60]!=""){
                $test['Loudspeaker']=$row[60];
            }
            if($row[61]!=""){
                $test['Audio Quality']=$row[61];
            }
            if($row[62]!=""){
                $test['Battery life']=$row[62];
            }
            if($row[63]!=""){
                $test['Display']=$row[63];
            }
            if($test!=[]){
                $r['TEST']=$test;
            }
            //Parsing Misc Data
            $misc=[];
            if($row[34]!=""){
                $misc['Color']=$row[34];
            }
            if($row[44]!=""){
                $misc['Price']=$row[44];
            }
            if($row[57]!=""){
                $misc['Models']=$row[57];
            }
            if($row[70]!=""){
                $misc['SAR EU']=$row[70];
            }
            if($row[74]!=""){
                $misc['SAR']=$row[74];
            }
            if($misc!=[]){
                $r['MISC']=$misc;
            }
            $rows[]=$r;

            $cs1='
            {
                "one": {
                    "icon": "calendar",
                    "Released": "'.$row[6].'"
                },
                "two": {
                    "icon": "iphone",
                    "Feature": "'.$row[9].'"
                },
                "three": {
                    "icon": "code-alt",
                    "OS": "'.$row[37].'"
                },
                "four": {
                    "icon": "micro-chip",
                    "Storage": "'.($row[41]==""?$row[50]:$row[41]).'"
                }
            }
            ';
            $cs2='
            {
                "one": {
                    "icon": "smart-phone",
                    "Display": "'.$row[12].'",
                    "Resolution": "'.$row[13].'"
                },
                "two": {
                    "icon": "camera",
                    "Photo": "'.$row[82].'",
                    "Video": "'.$row[43].'"
                },
                "three": {
                    "icon": "micro-chip",
                    "RAM": "'.$row[50].'",
                    "Chipset": "'.$row[38].'"
                },
                "four": {
                    "icon": "battery",
                    "Battery": "'.$row[75].'",
                    "Technology": "'.$row[56].'"
                }
            }
            ';
            $brand_id= $this->getBrandId($row[0]);
            $title= $row[1];
            if($title==""){
                continue;
            }
            $slug= str_replace(" ","-",$row[0]." ".$row[1]);
            $price= $row[44];
            // dd($brand_id,$title,$slug,$price);
            Device::create(['user_id'=>1,
                            'category_id'=>1,
                            'brand_id'=>$brand_id,
                            'title'=>$title,
                            'meta_title'=>$title,
                            'meta_keywords'=>"[]",
                            'slug'=>$slug,
                            'price'=>$price,
                            'specifications'=>json_encode($r),
                            'cover_specifications_1'=>$cs1,
                            'cover_specifications_2'=>$cs2,
                        ]);
        }
        return $rows;
    }
}
