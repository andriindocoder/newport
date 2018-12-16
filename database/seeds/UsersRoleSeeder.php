<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('role_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Role 1 : superadmin
            $superadminRole = new Role();
            $superadminRole->name = "superadmin";
            $superadminRole->display_name = "Superadmin";
            $superadminRole->save();
        //Role 2 : keuangan
            $adminKeuanganRole = new Role();
            $adminKeuanganRole->name = "keuangan";
            $adminKeuanganRole->display_name = "Seksi Keuangan";
            $adminKeuanganRole->save();
        //Role 3 : kepegawaian
            $adminKepegawaianRole = new Role();
            $adminKepegawaianRole->name = "kepegawaian";
            $adminKepegawaianRole->display_name = "Seksi Kepegawaian dan Umum";
            $adminKepegawaianRole->save();
        //Role 4 : humas
            $adminHumasRole = new Role();
            $adminHumasRole->name = "humas";
            $adminHumasRole->display_name = "Seksi Hukum dan Hubungan Masyarakat";
            $adminHumasRole->save();
        //Role 5 : renpro
            $adminRenproRole = new Role();
            $adminRenproRole->name = "renpro";
            $adminRenproRole->display_name = "Seksi Rencana dan Program";
            $adminRenproRole->save();
        //Role 6 : desain
            $adminDesainRole = new Role();
            $adminDesainRole->name = "desain";
            $adminDesainRole->display_name = "Seksi Desain dan Pembangunan";
            $adminDesainRole->save();
        //Role 7 : tarif
            $adminTarifRole = new Role();
            $adminTarifRole->name = "tarif";
            $adminTarifRole->display_name = "Seksi Analisa, Evaluasi, dan Tarif";
            $adminTarifRole->save();
        //Role 8 : lala
            $adminLalaRole = new Role();
            $adminLalaRole->name = "lala";
            $adminLalaRole->display_name = "Seksi Lalu Lintas dan Angkutan Laut";
            $adminLalaRole->save();
        //Role 9 : fasilitas
            $adminFasilitasRole = new Role();
            $adminFasilitasRole->name = "fasilitas";
            $adminFasilitasRole->display_name = "Seksi Fasilitas dan Pengawasan Operasional";
            $adminFasilitasRole->save();
        //Role 10: bimus
            $adminBimusRole = new Role();
            $adminBimusRole->name = "bimus";
            $adminBimusRole->display_name = "Seksi Bimbingan Usaha dan Jasa Kepelabuhanan";
            $adminBimusRole->save();
        //Role 11: Perusahaan
            $adminPerusahaanRole = new Role();
            $adminPerusahaanRole->name = "perusahaan";
            $adminPerusahaanRole->display_name = "Perusahaan";
            $adminPerusahaanRole->save();

        //User Keuangan
            $superadmin = new User();
            $superadmin->name = "superadmin";
            $superadmin->email = "superadmin@oppriok.dephub.go.id";
            $superadmin->password = bcrypt('123456');
            $superadmin->slug = "superadmin";
            $superadmin->bio = "superadmin";
            $superadmin->role_id = 1;
            $superadmin->save();
            $superadmin->attachRole($superadminRole);

            $adminKeuangan = new User();
            $adminKeuangan->name = "adminkeuangan";
            $adminKeuangan->email = "adminkeuangan@oppriok.dephub.go.id";
            $adminKeuangan->password = bcrypt('123456');
            $adminKeuangan->slug = "adminkeuangan";
            $adminKeuangan->bio = "adminkeuangan";
            $adminKeuangan->role_id = 2;
            $adminKeuangan->save();
            $adminKeuangan->attachRole($adminKeuanganRole);

            $adminKepegawaian = new User();
            $adminKepegawaian->name = "adminkepegawaian";
            $adminKepegawaian->email = "adminkepegawaian@oppriok.dephub.go.id";
            $adminKepegawaian->password = bcrypt('123456');
            $adminKepegawaian->slug = "adminkepegawaian";
            $adminKepegawaian->bio = "adminkepegawaian";
            $adminKepegawaian->role_id = 3;
            $adminKepegawaian->save();
            $adminKepegawaian->attachRole($adminKepegawaianRole);

            $adminHumas = new User();
            $adminHumas->name = "adminhumas";
            $adminHumas->email = "adminhumas@oppriok.dephub.go.id";
            $adminHumas->password = bcrypt('123456');
            $adminHumas->slug = "adminhumas";
            $adminHumas->bio = "adminhumas";
            $adminHumas->role_id = 4;
            $adminHumas->save();
            $adminHumas->attachRole($adminHumasRole);

            $adminRenpro = new User();
            $adminRenpro->name = "adminrenpro";
            $adminRenpro->email = "adminrenpro@oppriok.dephub.go.id";
            $adminRenpro->password = bcrypt('123456');
            $adminRenpro->slug = "adminrenpro";
            $adminRenpro->bio = "adminrenpro";
            $adminRenpro->role_id = 5;
            $adminRenpro->save();
            $adminRenpro->attachRole($adminRenproRole);

            $adminDesain = new User();
            $adminDesain->name = "admindesain";
            $adminDesain->email = "admindesain@oppriok.dephub.go.id";
            $adminDesain->password = bcrypt('123456');
            $adminDesain->slug = "admindesain";
            $adminDesain->bio = "admindesain";
            $adminDesain->role_id = 6;
            $adminDesain->save();
            $adminDesain->attachRole($adminDesainRole);

            $adminTarif = new User();
            $adminTarif->name = "admintarif";
            $adminTarif->email = "admintarif@oppriok.dephub.go.id";
            $adminTarif->password = bcrypt('123456');
            $adminTarif->slug = "admintarif";
            $adminTarif->bio = "admintarif";
            $adminTarif->role_id = 7;
            $adminTarif->save();
            $adminTarif->attachRole($adminTarifRole);

            $adminLala = new User();
            $adminLala->name = "adminlala";
            $adminLala->email = "adminlala@oppriok.dephub.go.id";
            $adminLala->password = bcrypt('123456');
            $adminLala->slug = "adminlala";
            $adminLala->bio = "adminlala";
            $adminLala->role_id = 8;
            $adminLala->save();
            $adminLala->attachRole($adminLalaRole);

            $adminFasilitas = new User();
            $adminFasilitas->name = "adminfasilitas";
            $adminFasilitas->email = "adminfasilitas@oppriok.dephub.go.id";
            $adminFasilitas->password = bcrypt('123456');
            $adminFasilitas->slug = "adminfasilitas";
            $adminFasilitas->bio = "adminfasilitas";
            $adminFasilitas->role_id = 9;
            $adminFasilitas->save();
            $adminFasilitas->attachRole($adminFasilitasRole);

            $adminBimus = new User();
            $adminBimus->name = "adminbimus";
            $adminBimus->email = "adminbimus@oppriok.dephub.go.id";
            $adminBimus->password = bcrypt('123456');
            $adminBimus->slug = "adminbimus";
            $adminBimus->bio = "adminbimus";
            $adminBimus->role_id = 10;
            $adminBimus->save();
            $adminBimus->attachRole($adminBimusRole);
    }
}
