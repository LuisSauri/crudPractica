<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class clientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('crud_list')->delete();

        $crud_list = array(
            array('nombre' => 'Sheryl', 'apellido' => 'Baxter', 'company' => 'Rasmussen Group', 'ciudad' => 'East Leonard', 'pais' => 'Chile', 'telefono1' => '5453342', 'telefono2' => '6347631', 'email' => 'zunigavanessa@smith.info', 'website' => 'http://www.stephenson.com/'),
            array('nombre' => 'Preston', 'apellido' => 'Lozano', 'company' => 'Vega-Gentry', 'ciudad' => 'East Jimmychester', 'pais' => 'Djibouti', 'telefono1' => '6917486', 'telefono2' => '3285964', 'email' => 'vmata@colon.com', 'website' => 'http://www.hobbs.com/'),
            array('nombre' => 'Roy', 'apellido' => 'Berry', 'company' => 'Murillo-Perry', 'ciudad' => 'Isabelborough', 'pais' => 'Antigua and Barbuda', 'telefono1' => '54563457', 'telefono2' => '94865674', 'email' => 'beckycarr@hogan.com', 'website' => 'http://www.lawrence.com/'),
            array('nombre' => 'Linda', 'apellido' => 'Olsen', 'company' => 'Dominguez, Mcmillan and Donovan', 'ciudad' => 'Bensonview', 'pais' => 'Dominican Republic', 'telefono1' => '958687942', 'telefono2' => '0438375', 'email' => 'stanleyblackwell@benson.org', 'website' => 'http://www.good-lyons.com/'),
            array('nombre' => 'Joanna', 'apellido' => 'Blender', 'company' => 'Martin, Lang and Andrade', 'ciudad' => 'West Priscilla', 'pais' => 'Slovakia (Slovak Republic)', 'telefono1' => '64535547', 'telefono2' => '433468708', 'email' => 'colinalvarado@miles.net', 'website' => 'https://goodwin-ingram.com/'),
            array('nombre' => 'Aimee', 'apellido' => 'Downs', 'company' => 'Steele Group', 'ciudad' => 'Chavezborough', 'pais' => 'Bosnia and Herzegovina', 'telefono1' => '3859275', 'telefono2' => '3948702', 'email' => 'louis27@gilbert.com', 'website' => 'http://www.berger.net/'),
            array('nombre' => 'Darren', 'apellido' => 'Peck', 'company' => 'Lester, Woodard and Mitchell', 'ciudad' => 'Lake Ana', 'pais' => 'Pitcairn Islands', 'telefono1' => '475970184', 'telefono2' => '395864386', 'email' => 'tgates@cantrell.com', 'website' => 'https://www.le.com/'),
            array('nombre' => 'Brett', 'apellido' => 'Mullen', 'company' => 'Sanford, Davenport and Giles', 'ciudad' => 'Kimport', 'pais' => 'Bulgaria', 'telefono1' => '4856935', 'telefono2' => '2346980', 'email' => 'asnow@colon.com', 'website' => 'https://hammond-ramsey.com/'),
            array('nombre' => 'Sheryl', 'apellido' => 'Mayers', 'company' => 'Browning-Simon', 'ciudad' => 'Robersonstad', 'pais' => 'Cyprus', 'telefono1' => '34635964', 'telefono2' => '87950983', 'email' => 'mariokhan@ryan-pope.org', 'website' => 'https://www.bullock.net/'),
            array('nombre' => 'Michelle', 'apellido' => 'Gallagher', 'company' => 'Beck-Hendrix', 'ciudad' => 'Elaineberg', 'pais' => 'Timor-Leste', 'telefono1' => '8656943', 'telefono2' => '32985305', 'email' => 'mdyer@escobar.net', 'website' => 'https://www.brandt.com/'),
            array('nombre' => 'Carl', 'apellido' => 'Schroeder', 'company' => 'Oconnell, Meza and Everett', 'ciudad' => 'Shannonville', 'pais' => 'Guernsey', 'telefono1' => '39583345', 'telefono2' => '4534309', 'email' => 'kirksalas@webb.com', 'website' => 'https://arias.com/'),
            array('nombre' => 'Jenna', 'apellido' => 'Dodson', 'company' => 'Hoffman, Reed and Mcclain', 'ciudad' => 'East Andrea', 'pais' => 'Vietnam', 'telefono1' => '3432343', 'telefono2' => '3242354', 'email' => 'mark42@robbins.com', 'website' => 'https://simmons-hurley.com/'),
            array('nombre' => 'Tracey', 'apellido' => 'Mata', 'company' => 'Graham-Francis', 'ciudad' => 'South Joannamouth', 'pais' => 'Tongo', 'telefono1' => '3432345', 'telefono2' => '3324234', 'email' => 'alex56@walls.org', 'website' => 'http://www.douglas.net/'),
            array('nombre' => 'Kistine', 'apellido' => 'Cox', 'company' => 'Carpenter-Cook', 'ciudad' => 'Jodyberg', 'pais' => 'Sri Lanka', 'telefono1' => '824234', 'telefono2' => '3453543', 'email' => 'holdenmiranda@clarke.com', 'website' => 'http://www.beck.com/'),
            array(
                'nombre' => 'Faith',
                'apellido' => 'Lutz',
                'company' => 'Carter-Hancock',
                'ciudad' => 'Burchbury',
                'pais' => 'Singapore',
                'telefono1' => '654534',
                'telefono2' => '6573646',
                'email' => 'cassieparrish@blevins-chapman.net',
                'website' => 'http://stevenson.org/
'
            ),
        );


        DB::table('crud_list')->insert($crud_list);
    }
}
