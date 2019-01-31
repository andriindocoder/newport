<?php 

namespace App\View\Composers;

use Illuminate\View\View;
use App\Model\TampilanDepan;

class NavigationComposer{

	public function compose(View $view){
		$this->composeAll($view);
	}

	private function composeAll(View $view){
        $tagline = TampilanDepan::where('kode_tampilan','=','tagline')->first();
        $marquee = TampilanDepan::where('kode_tampilan','=','pengumumanberjalan')->first();
        $copyright = TampilanDepan::where('kode_tampilan','=','copyright')->first();
        $judulgrafik = TampilanDepan::where('kode_tampilan','=','judulgrafik')->first();
        $judulkegiatanotoritas = TampilanDepan::where('kode_tampilan','=','judulkegiatanotoritas')->first();
        $judulfasilitaspelabuhan = TampilanDepan::where('kode_tampilan','=','judulfasilitaspelabuhan')->first();
        $berita = TampilanDepan::where('kode_tampilan','=','berita')->first();
        $judulgalerifoto = TampilanDepan::where('kode_tampilan','=','judulgalerifoto')->first();
        $judulgalerivideo = TampilanDepan::where('kode_tampilan','=','judulgalerivideo')->first();
        $judullinkterkait = TampilanDepan::where('kode_tampilan','=','judullinkterkait')->first();
        $judulalamat = TampilanDepan::where('kode_tampilan','=','judulalamat')->first();
        $alamat = TampilanDepan::where('kode_tampilan','=','alamat')->first();
        $judulslidesatu = TampilanDepan::where('kode_tampilan','=','judulslidesatu')->first();
        $judulslidedua = TampilanDepan::where('kode_tampilan','=','judulslidedua')->first();
        $judulslidetiga = TampilanDepan::where('kode_tampilan','=','judulslidetiga')->first();
        $judulslideempat = TampilanDepan::where('kode_tampilan','=','judulslideempat')->first();
        $judulslidelima = TampilanDepan::where('kode_tampilan','=','judulslidelima')->first();
        $slidesatu = TampilanDepan::where('kode_tampilan','=','slidesatu')->first();
        $slidedua = TampilanDepan::where('kode_tampilan','=','slidedua')->first();
        $slidetiga = TampilanDepan::where('kode_tampilan','=','slidetiga')->first();
        $slideempat = TampilanDepan::where('kode_tampilan','=','slideempat')->first();
        $slidelima = TampilanDepan::where('kode_tampilan','=','slidelima')->first();

        $view->with('judulgrafik',$judulgrafik);
        $view->with('judulkegiatanotoritas',$judulkegiatanotoritas);
        $view->with('judulfasilitaspelabuhan',$judulfasilitaspelabuhan);
        $view->with('berita',$berita);
        $view->with('judulgalerifoto',$judulgalerifoto);
        $view->with('judulgalerivideo',$judulgalerivideo);
        $view->with('judullinkterkait',$judullinkterkait);
        $view->with('marquee',$marquee);
        $view->with('slidesatu',$slidesatu);
        $view->with('slidedua',$slidedua);
        $view->with('slidetiga',$slidetiga);
        $view->with('slideempat',$slideempat);
        $view->with('slidelima',$slidelima);
        $view->with('judulslidesatu',$judulslidesatu);
        $view->with('judulslidedua',$judulslidedua);
        $view->with('judulslidetiga',$judulslidetiga);
        $view->with('judulslideempat',$judulslideempat);
        $view->with('judulslidelima',$judulslidelima);
        $view->with('tagline',$tagline);
        $view->with('judulalamat',$judulalamat);
        $view->with('alamat',$alamat);
        $view->with('copyright',$copyright);
        $view->with('tagline',$tagline);
    }
}