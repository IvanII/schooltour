<?php

use Illuminate\Database\Seeder;
use App\Models\Contact;

class AddContacts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->address = '644029, г. Омск, ул. 20 Партсъезда, 37 к1';
        $contact->office = '28';
        $contact->working_hours = 'ПН-ПТ: 10:00-19:00, СБ: 10:00-15:00, выходной: воскресенье';
        $contact->phone = '8-913-633-25-57, 8-913-601-11-62, 51-80-99';
        $contact->email = 'schooltour55@mail.ru';
        $contact->save();
    }
}
