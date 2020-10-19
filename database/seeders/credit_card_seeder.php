<?php

namespace Database\Seeders;

use App\Models\CreditCard;
use App\Models\Customer;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class credit_card_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $credit_cards = DB::table('credit_cards')->get('id');
        $json =  \Illuminate\Support\Facades\File::get("database/data/challenge.json");
        $data = json_decode($json);

        $count = $credit_cards->count();

        $userId = DB::table('customers')->get('id');
        if($count == 0){
            foreach ($userId as $id){
                foreach ($data as $obj){
                    CreditCard::create(array(
                        'customer_id'=>$id->id,
                        'type'=>$obj->credit_card->type,
                        'number'=>$obj->credit_card->number,
                        'name'=>$obj->credit_card->name,
                        'expirationDate'=>$obj->credit_card->expirationDate,

                    ));
                    $id->id++;
                }
                break;

            }
        }else {
            for ($i = $count; $i < count($data); $i++) {

                CreditCard::create(array(

                    'customer_id' => $data[$i]->id,
                    'type' => $data[$i]->credit_card->type,
                    'number' => $data[$i]->credit_card->number,
                    'name' => $data[$i]->credit_card->name,
                    'expirationDate' => $data[$i]->credit_card->expirationDate,


                ));
            }
        }

    }
}
