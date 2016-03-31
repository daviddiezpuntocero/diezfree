 <script language="JavaScript">
 

	
	
	//Funciones para cargar select de subcategorias
	
	function cambiar(){
	   
		var index=document.forms.formulario.categorias.selectedIndex;

		formulario.subcategoria.length=0;
	   
		if(index==0) sub_cat1();
		if(index==1) sub_cat2();
		if(index==2) sub_cat3();
		if(index==3) sub_cat4();
		if(index==4) sub_cat5();
		if(index==5) sub_cat6(); 
		if(index==6) sub_cat7();    
	}
	
	



	function sub_cat1(){
		
		opcion0=new Option("Página Web","Página Web","defauldSelected");
		opcion1=new Option("Página Web + Aplicación Mobil","Página Web + Aplicación Mobil");
		opcion2=new Option("Aplicación Movil","Aplicación Movil");
		opcion3=new Option("Página E-commerce","Página E-commerce");
		opcion4=new Option("CRM ERP Aplicaciones empresariles","CRM ERP Aplicaciones empresariles");
		opcion5=new Option("WordPress, Joomla, CMS","WordPress, Joomla, CMS");
		opcion6=new Option("Desarrollo de Juego","Desarrollo de Juego");
		opcion7=new Option("Plataforma E-learning","Plataforma E-learning");
		opcion8=new Option("Base de Datos","Base de Datos");
		opcion9=new Option("Aplicación JAVA","Aplicación JAVA");
		opcion10=new Option("Aplicación PHP","Aplicación PHP");

		document.forms.formulario.subcategoria.options[0]=opcion0;
		document.forms.formulario.subcategoria.options[1]=opcion1;
		document.forms.formulario.subcategoria.options[2]=opcion2;
		document.forms.formulario.subcategoria.options[3]=opcion3;
		document.forms.formulario.subcategoria.options[4]=opcion4;
		document.forms.formulario.subcategoria.options[5]=opcion5;
		document.forms.formulario.subcategoria.options[6]=opcion6;
		document.forms.formulario.subcategoria.options[7]=opcion7;
		document.forms.formulario.subcategoria.options[8]=opcion8;
		document.forms.formulario.subcategoria.options[9]=opcion9;
		document.forms.formulario.subcategoria.options[10]=opcion10;   
	 }
 

function sub_cat2(){
  opcion0=new Option("Abril","Abril","defauldSelected");
  opcion1=new Option("Mayo","Mayo");
  opcion2=new Option("Junio","Junio");
  
  document.forms.formulario.subcategoria.options[0]=opcion0;
  document.forms.formulario.subcategoria.options[1]=opcion1;
  document.forms.formulario.subcategoria.options[2]=opcion2;  
 }

function sub_cat3(){
  opcion0=new Option("Julio","Julio","defauldSelected");
  opcion1=new Option("Agosto","Agosto");
  opcion2=new Option("Septiembre","Septiembre");

  document.forms.formulario.subcategoria.options[0]=opcion0;
  document.forms.formulario.subcategoria.options[1]=opcion1;
  document.forms.formulario.subcategoria.options[2]=opcion2;  
 }
 
function sub_cat4(){
  opcion0=new Option("Octubre","Octubre","defauldSelected");
  opcion1=new Option("Noviembre","Noviembre");
  opcion2=new Option("Diciembre","Diciembre");
  
  document.forms.formulario.subcategoria.options[0]=opcion0;
  document.forms.formulario.subcategoria.options[1]=opcion1;
  document.forms.formulario.subcategoria.options[2]=opcion2;  
 }
 function sub_cat5(){
  opcion0=new Option("Octubre","Octubre","defauldSelected");
  opcion1=new Option("Noviembre","Noviembre");
  opcion2=new Option("Diciembre","Diciembre");
  
  document.forms.formulario.subcategoria.options[0]=opcion0;
  document.forms.formulario.subcategoria.options[1]=opcion1;
  document.forms.formulario.subcategoria.options[2]=opcion2;  
 }
 function sub_cat6(){
  opcion0=new Option("Octubre","Octubre","defauldSelected");
  opcion1=new Option("Noviembre","Noviembre");
  opcion2=new Option("Diciembre","Diciembre");
  
  document.forms.formulario.subcategoria.options[0]=opcion0;
  document.forms.formulario.subcategoria.options[1]=opcion1;
  document.forms.formulario.subcategoria.options[2]=opcion2;  
 }
 function sub_cat7(){
  opcion0=new Option("Octubre","Octubre","defauldSelected");
  opcion1=new Option("Noviembre","Noviembre");
  opcion2=new Option("Diciembre","Diciembre");
  
  document.forms.formulario.subcategoria.options[0]=opcion0;
  document.forms.formulario.subcategoria.options[1]=opcion1;
  document.forms.formulario.subcategoria.options[2]=opcion2;  
 }

 

//FIN Funciones para cargar select de subcategorias
</script>