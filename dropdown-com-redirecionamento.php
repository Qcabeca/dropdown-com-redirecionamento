<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="noindex">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DropDown com Redirecionamento</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

<script type="text/javascript">
 var $n = jQuery.noConflict();
// Use jQuery com a variavel $n(...)
$n(document).ready(function(){
$n('#regiao').change(function() {

 // REDIRECT PRA REGIÃO CENTRO-OESTE
 if ($n(this).val() == "centro-oeste") { //verifica se o valor escolhido é centro-oeste
  window.open('http://pt.wikipedia.org/wiki/Regiao_Centro-Oeste_do_Brasil','_blank');// se for centro-oeste redireciona par url
 }
 // REDIRECT PRA REGIÃO NORTE
 else if ($n(this).val() == "nordeste") { //verifica se o valor escolhido é nordeste
  window.open('http://pt.wikipedia.org/wiki/Regiao_Nordeste_do_Brasil','_blank');// se for nordeste redireciona par url
 }
 
 // REDIRECT PRA REGIÃO NORTE
 else if ($n(this).val() == "norte") { //verifica se o valor escolhido é norte
  window.open('http://pt.wikipedia.org/wiki/Regiao_Norte_do_Brasil','_blank'); // se for norte redireciona par url
 }
 
 // REDIRECT PRA REGIÃO SUDESTE
 if ($n(this).val() == "sudeste") { //verifica se o valor escolhido é sudeste
   window.open('http://pt.wikipedia.org/wiki/Regiao_Sudeste_do_Brasil','_blank');// se for sudeste redireciona par url
 
 }
 
  // REDIRECT PRA REGIÃO SUL
 if ($n(this).val() == "sul") { //verifica se o valor escolhido é sul
   window.open('http://pt.wikipedia.org/wiki/Regiao_Sul_do_Brasil','_blank'); // se for sul redireciona par url
 
 }
 
 else { 
 //se não for nenhuma das opções acima não acontece nada
}
});
});
</script>

<style type="text/css">

.conteudo {
	width:960px;
	text-align:justify;
	margin:0 auto;
	
}
h1 { text-align:center }

.rodape {
	width:940px;
	margin:0 auto;
	height:30px;
	line-height:30px;
	color:#FFF;
	font-weight:bold;
	background-color:#000;
	padding:0 10px;
}

#regiao {
    float: left;
    font-style: italic;
    height: 40px;
    margin-top: 50px;
    text-indent: 10px;
    width: 100%;
}
</style>

</head>

<body>

<div class="conteudo">

<h1>Dropdown com redirecionamento</h1>

<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
<p>
Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>

<select id="regiao" name="regiao">
  <option value="">Selecione uma região</option>
  <option value="centro-oeste">Centro-Oeste</option>
  <option value="nordeste">Nordeste</option>
  <option value="norte">Norte</option>
  <option value="sul">Sul</option>
  <option value="sudeste">Sudeste</option>
</select>
</div>
</body>
</html>
