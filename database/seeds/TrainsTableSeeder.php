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
        $train1->train_code = '10';
        $train1->carriage_number = '11';
        $train1->isTrainLate = false;
        $train1->isTrainDeleted = false;

        $train1->save();

        $train2= new Train();

        $train2->company = 'Italo';
        $train2->where_from = 'venezia';
        $train2->where_for = 'Roma';
        $train2->departure = date('Y-m-d',strtotime(2022-9-9));
        $train2->arrival =  date('Y-m-d',strtotime(2022-9-9));
        $train2->train_code = '1023';
        $train2->carriage_number = '2';
        $train2->isTrainLate = false;
        $train2->isTrainDeleted = false;

        $train2->save();

        $train3= new Train();

        $train3->company = 'Trenitalia';
        $train3->where_from = 'Napoli';
        $train3->where_for = 'Roma';
        $train3->departure = date('Y-m-d',strtotime(2022-9-9));
        $train3->arrival =  date('Y-m-d',strtotime(2022-9-9));
        $train3->train_code = '1234';
        $train3->carriage_number = '23';
        $train3->isTrainLate = false;
        $train3->isTrainDeleted = false;

        $train3->save();

        $train4= new Train();

        $train4->company = 'Trenitralia';
        $train4->where_from = 'Pordenone';
        $train4->where_for = 'Udine';
        $train4->departure = date('Y-m-d',strtotime(2022-9-9));
        $train4->arrival =  date('Y-m-d',strtotime(2022-9-9));
        $train4->train_code = '4345';
        $train4->carriage_number = '3';
        $train4->isTrainLate = true;
        $train4->isTrainDeleted = false;

        $train4->save();

        $train5= new Train();

        $train5->company = 'Italo';
        $train5->where_from = 'Padova';
        $train5->where_for = 'Mestre';
        $train5->departure = date('Y-m-d',strtotime(2022-9-9));
        $train5->arrival =  date('Y-m-d',strtotime(2022-9-9));
        $train5->train_code = '10';
        $train5->carriage_number = '11';
        $train5->isTrainLate = false;
        $train5->isTrainDeleted = false;

        $train5->save();



    }
}
