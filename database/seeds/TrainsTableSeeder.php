<?php
use App\Train ;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train1= new Train();

        $train1->company = 'Italo';
        $train1->where_from = 'Milano';
        $train1->where_for = 'Roma';
        $train1->departure = date('Y-m-d',strtotime(2022-9-9));
        $train1->arrival =  date('Y-m-d',strtotime(2022-9-9));
        $train1->train_code = '234564';
        $train1->carriage_number = '11';
        $train1->isTrainLate = false;
        $train1->isTrainDeleted = false;

        $train1->save;



    }
}
