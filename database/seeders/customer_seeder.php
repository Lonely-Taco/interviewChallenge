<?php

namespace Database\Seeders;

use App\Models\Customer;
use Faker\Provider\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customer_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = DB::table('customers')->get('id');
        $count = $customers->count();

        $json =  \Illuminate\Support\Facades\File::get("database/data/challenge.json");
        $data = json_decode($json);

        if($count == 0){
            foreach ($data as $obj){
                Customer::create(array(

                    'name'=>$obj->name,
                    'address'=>$obj->address,
                    'checked'=>$obj->checked,
                    'description'=>$obj->description,
                    'interest'=>$obj->interest,
                    'date_of_birth'=>$obj->date_of_birth,
                    'email'=>$obj->email,
                    'account'=>$obj->account,


                ));

            }

        }else{
            for ($i = $count; $i < count($data); $i++ ){

                Customer::create(array(

                    'name'=>$data[$i]->name,
                    'address'=>$data[$i]->address,
                    'checked'=>$data[$i]->checked,
                    'description'=>$data[$i]->description,
                    'interest'=>$data[$i]->interest,
                    'date_of_birth'=>$data[$i]->date_of_birth,
                    'email'=>$data[$i]->email,
                    'account'=>$data[$i]->account,


                ));
            }
        }

    }
}
