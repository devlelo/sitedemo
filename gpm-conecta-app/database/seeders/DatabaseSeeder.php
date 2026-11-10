<?php
namespace Database\Seeders;
use App\Models\Category; use App\Models\User; use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder {
 public function run():void {
  foreach([['Construção e materiais','construction','CON'],['Hotelaria e alojamento','hospitality','HOT'],['Estaleiros e operações','worksites','EST'],['Escritórios e empresas','offices','OFF'],['Alimentação profissional','foodservice','ALI']] as $i=>$row) Category::firstOrCreate(['slug'=>$row[1]],['name'=>$row[0],'code'=>$row[2],'sort_order'=>$i+1,'is_active'=>true]);
  if(env('GPM_ADMIN_EMAIL') && env('GPM_ADMIN_PASSWORD')) User::updateOrCreate(['email'=>env('GPM_ADMIN_EMAIL')],['name'=>env('GPM_ADMIN_NAME','Administrador GPM'),'password'=>env('GPM_ADMIN_PASSWORD'),'role'=>'admin','is_active'=>true]);
 }
}
