<?php

use Illuminate\Database\Seeder;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specification')->insert([

            //BYTY
            ['title' => 'Garsónka',
             'group' => 'Byty'  ],

            ['title' => 'Mezonet',
                'group' => 'Byty'  ],

            ['title' => 'Apartmán',
                'group' => 'Byty'  ],

            ['title' => '1 izbový byt',
                'group' => 'Byty'  ],

            ['title' => '2 izbový byt',
                'group' => 'Byty'  ],

            ['title' => '3 izbový byt',
                'group' => 'Byty'  ],

            ['title' => '4 izbový byt',
                'group' => 'Byty'  ],

            ['title' => '5 izbový byt a viac',
                'group' => 'Byty'  ],


            //DOMY

            ['title' => 'Rodinný dom',
                'group' => 'Domy'  ],

            ['title' => 'Rodinná vila',
                'group' => 'Domy'  ],

            ['title' => 'Zrubový dom',
                'group' => 'Domy'  ],

            ['title' => 'Bungalov',
                'group' => 'Domy'  ],

            ['title' => 'Vidiecky dom',
                'group' => 'Domy'  ],

            ['title' => 'Bývalá poľnohospodárska usadlosť',
                'group' => 'Domy'  ],


            //REKREAČNÉ DOMY

            ['title' => 'Chata a chalupa',
                'group' => 'Rekreačné domy'  ],

            ['title' => 'Zruby a drevenice',
                'group' => 'Rekreačné domy'  ],

            ['title' => 'Záhradná chatka',
                'group' => 'Rekreačné domy'  ],

            //OBJEKTY

            ['title' => 'Nájomný dom',
                'group' => 'Objekty'  ],

            ['title' => 'Apartmánový dom',
                'group' => 'Objekty'  ],

            ['title' => 'Administratívny objekt',
                'group' => 'Objekty'  ],

            ['title' => 'Polyfunkčný objekt',
                'group' => 'Objekty'  ],

            ['title' => 'Objekt pre obchod',
                'group' => 'Objekty'  ],

            ['title' => 'Reštaurácia',
                'group' => 'Objekty'  ],

            ['title' => 'Hotel, penzión',
                'group' => 'Objekty'  ],

            ['title' => 'Kúpeľný objekt',
                'group' => 'Objekty'  ],

            ['title' => 'Objekt pre šport',
                'group' => 'Objekty'  ],

            ['title' => 'Výrobný objekt',
                'group' => 'Objekty'  ],

            ['title' => 'Skladový objekt',
                'group' => 'Objekty'  ],

            ['title' => 'Prevádzkový areál',
                'group' => 'Objekty'  ],

            ['title' => 'Poľnohospodársky objekt',
                'group' => 'Objekty'  ],

            ['title' => 'Opravárenský objekt',
                'group' => 'Objekty'  ],

            ['title' => 'Čerpacia stanica',
                'group' => 'Objekty'  ],

            ['title' => 'Garáž',
                'group' => 'Objekty'  ],

            ['title' => 'Spevnené plochy',
                'group' => 'Objekty'  ],

            ['title' => 'Malá elektráreň',
                'group' => 'Objekty'  ],

            ['title' => 'Historický objekt',
                'group' => 'Objekty'  ],

            ['title' => 'Iný objekt',
                'group' => 'Objekty'  ],

            //PRIESTORY

            ['title' => 'Kancelárie, administrátorské priestory',
                'group' => 'Priestory'  ],

            ['title' => 'Obchodné priestory',
                'group' => 'Priestory'  ],

            ['title' => 'Reštauračné priestory',
                'group' => 'Priestory'  ],

            ['title' => 'Športové priestory',
                'group' => 'Priestory'  ],

            ['title' => 'Výrobné priestory',
                'group' => 'Priestory'  ],

            ['title' => 'Skladové priestory',
                'group' => 'Priestory'  ],

            ['title' => 'Opravárenské priestory',
                'group' => 'Priestory'  ],

            ['title' => 'Iné priestory',
                'group' => 'Priestory'  ],

            //Pozemky

            ['title' => 'Pozemok pre rod. dom',
                'group' => 'Pozemky'  ],

            ['title' => 'Rekreačný pozemok',
                'group' => 'Pozemky'  ],

            ['title' => 'Pozemok pre byt. stavba',
                'group' => 'Pozemky'  ],

            ['title' => 'Pozemok pre obč. vybavenosť',
                'group' => 'Pozemky'  ],

            ['title' => 'Zmiešaná zóna',
                'group' => 'Pozemky'  ],

            ['title' => 'Komerčná zóna',
                'group' => 'Pozemky'  ],

            ['title' => 'Priemyselná zóna',
                'group' => 'Pozemky'  ],

            ['title' => 'Záhrada',
                'group' => 'Pozemky'  ],

            ['title' => 'Orná pôda',
                'group' => 'Pozemky'  ],

            ['title' => 'Sad',
                'group' => 'Pozemky'  ],

            ['title' => 'Lúka, pasienok',
                'group' => 'Pozemky'  ],

            ['title' => 'Chmelnica, vinica',
                'group' => 'Pozemky'  ],

            ['title' => 'Lesy',
                'group' => 'Pozemky'  ],

            ['title' => 'Rybník, vodná plocha',
                'group' => 'Pozemky'  ],

            ['title' => 'Iný pozemok',
                'group' => 'Pozemky'  ],










        ]);
    }
}
