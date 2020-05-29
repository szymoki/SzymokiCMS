<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Page extends BaseConfig
{
	public $page_left_boxes=array(
	array("color"=>1,"text"=>"Dla rodzica","url"=>"/dla_rodzica","icon"=>"professor"),
	array("color"=>1,"text"=>"Dla ucznia","url"=>"/dla_ucznia","icon"=>"student"),
	array("color"=>3,"text"=>"Uczniowskie pasje","url"=>"/uczniowskie_pasje","icon"=>"book"),
	array("color"=>1,"text"=>"Absolwenci","url"=>"/absolwenci","icon"=>"student"),
	array("color"=>1,"text"=>"Galeria","url"=>"/galeria","icon"=>"open-book")
); 


	public $page_footer_menu=array(
	array("name"=>"Informacje","url"=>"/informacje","title"=>""),
    array("name"=>"Dziennik","url"=>"https://uonetplus.vulcan.net.pl/powiatstalowowolski","title"=>""),
	array("name"=>"Rekrutacja","url"=>"/rekrutacja","title"=>""),
	array("name"=>"Dojazd","url"=>"/dojazd","title"=>""),



);
public $page_footer_menu2=array(
	array("name"=>"OKE","url"=>"https://oke.krakow.pl","title"=>"Okręgowa Komisja Egzaminacyjna"),
    array("name"=>"KO Rzeszów","url"=>"https://ko.rzeszow.pl","title"=>"Kuratorium Oświaty w Rzeszowie"),
	array("name"=>"CKE","url"=>"https://cke.gov.pl","title"=>"Centralna Komisja Egzaminacyjna"),
	array("name"=>"PCEN","url"=>"https://pcen.pl","title"=>"Podkarpackie Centrum Edukacji Nauczycieli")


);
          
public $fb=array("url"=>"http://loken.pl","title"=>"I Liceum Ogólnokształcące im. KEN","text"=>"Witamy na naszej stronie","image"=>""); 


public $categories=array("Informacje","Osiągnięcia","Techniczne","Uroczystości");


public $acl_items = array("pages"=>"Zarządzanie podstronami",
	"news"=>"Publikowanie newsów w wszystkich kategoriach",
	"news_pages"=>"Publikowanie newsów w stronach przedmiotowych",
	"gallery"=>"Zarządzanie galerią",
	"files"=>"Dostęp do plików",
	"szablon"=>"Zarządzanie szablonem",
	"pages_p"=>"Zarządzanie wszystkimi stronami przedmiotowymi",
	);

}