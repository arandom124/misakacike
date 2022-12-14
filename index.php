<?php  require 'header.php'; ?>
<?php
//este codigo pertenece al contador de visitas inicia aqui
function contar_usuarios(){
  $archivo = 'contador.txt';
  if (file_exists($archivo)){
    $cuenta = file_get_contents($archivo) + 1;
    file_put_contents($archivo, $cuenta);
    return $cuenta;
  }
  else
  {
    file_put_contents($archivo, 1);
    return 1;
  }
}//este codigo pertenece al contador de visitas termina aqui
?>

	<!-- Slider las img carrosel -->
<section class="section-slide">
	<div class="wrap-slick1 rs2-slick1">
		<div class="slick1">
			<div class="item-slick1 bg-overlay1" style="background-image: url(img/slide-05.jpg);" data-thumb="img/thumb-01.jpg" alt="Generic placeholder image" width="100%" height="100%" data-caption="Misak Misak Waramik">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear=--"fadeInDown" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								Misak Misak Waramik
							</span>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								misak visibiliza la identidad cultural de los pueblos
							</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1 bg-overlay1" style="background-image: url(img/slide-06.jpg);" data-thumb="img/thumb-02.jpg" data-caption="Territorio Ancentral Wampia">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								Territorio Ancentral Wampia
							</span>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								que habita en el sur de Colombia en el departamento del Cauca. Su Resguardo Mayor original Guamb??a est?? en el municipio de Silvia y habitan tambi??n en otros lugares cercanos, de la Cordillera Central de los Andes colombianos.
							</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1 bg-overlay1" style="background-image: url(img/slide-07.jpg);" data-thumb="img/thumb-03.jpg" data-caption="Pueblo Misak">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								Pueblo Misak
							</span>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								Para los antrop??logos, los Misak son originarios del territorio del prehisp??nico cacicazgo de Calamb??s, que hac??a parte de la Confederaci??n Pubense
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap-slick1-dots p-lr-10"></div>
	</div>
</section>
<br>
<br>
<h1><center>Nam Misak</h1></center> 
<br>

<!-- Mensajes de marketing y art??culos destacados

    ================================================== -->

    <!-- Envuelva el resto de la p??gina en otro contenedor para centrar todo el contenido. -->



    <div class="container marketing">



      <!-- Tres columnas de texto debajo del carrusel. -->

      <div class="row">

        <div class="col-lg-4">

          <img class="img-circle" src="img/ishuk.jpg" title="No sea malo, comparta" width="140" height="140" style="border-radius:65px 65px 65px 65px;">

          <h2>Ishuk Misak</h2>

          <p align="justify">namui shurmera pe trentan... ???namui misak mera manasr??nkutri ??sik warailan wam m??r??sr??p eshkap warapel??pe pulelelai lata yana warapt?? ??sk??raik kilkayut?? war??m??n cha; trek k??m??t?? namui wamyu, kitr??p pichip yu metrapsr?? kutri went??sr?? katik asha wam yu kutri srap p??lpasrik???   k??ntan. ???namui pirau n??tr?? shuk merayu namui metrap misamera chinet?? p??r??p piship mara p??nsrail?? pe: aship, n??tr?? isuil??, n??tr?? kusrenn??pel?? kuik??n; inchakutri manasr??nkutri nam misak mait?? warapel?? kuikwan m??inkatik wam m??r??sr??p waran tru namui n??tr?? wammera taik. </p>

          

        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">

          <img class="img-circle" src="img/mok.jpg" alt="Generic placeholder image" width="140" height="140" style="border-radius:65px 65px 65px 65px;">

          <h2>M??k Misak</h2>

          <p align="justify">Namui shurmerai kampa n??tr?? wam meran tap aship wam m??r??p ipene namui shurmerape trentan: kampa wam meran ashene m??isr??mpe pek k??n  cha, kakent?? m??i misak merape ik wam meran shurmerai wamyu kutri aship wam m??r??p mar??p k??m??t?? wampik kutri kusreil?? t??ka nepua wetsallip intamik nepuimpa; incha trek kutri wampikik wan pa kemesra ashene namuipape chinchaken kanlatrapt?? misrmik kuik??n, wam merape pekpek misran llisk??p cha ashen. </p>

          

        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">

          <img class="img-circle" src="img/ni??os.jpg" alt="Generic placeholder image" width="140" height="140" style="border-radius:65px 65px 65px 65px;">

          <h2>Urek Mera</h2>

          <p align="justify">uremera wam m??rsrap pupelan eshkapik kui k??n, kat??kane pun?? patr?? amp??rap ipurap wam m??rik wan pekuchipik kui k??n, namui tasiku tratr?? kat?? namui nu isua kusreilan eshkan: na ??i namui nu pir?? tata mama ikl?? kutike nepua asil?? pe namui nu kusreil?? k??n. Namui tratr?? tasik urek kuinuk. </p>

          

        </div><!-- /.col-lg-4 -->

      </div><!-- /.row -->





      <!-- INICIAR rese??a historica___________________________________________________________________________________________-->

      <div class="content">

       

      <h1><center>Rese??a Historica</h1></center>      

    

    <br><hr>El pueblo Misak esta ubiacado al nororiente del departamento del Cauca, municipio de Silvia-Territorio Ancestral Guambia.</br></hr>



      <br>Ha iniciado procesos desde antes del a??o 1980, ya que nuestro mayores tenian una vision de recuperar el territorio de igual manera

    nuestra identidad para pervivir en el tiempo y en el espacio.</br>



    <br>Por ello, Nuestro pueblo Misak ha adelantado diferentes procesos para la comunidad bajo el Principio

    de <b>"Recuperar La Tierra Para Recuperarlo Todo"</b> promulgado en nuestro <b>Manifiesto Guambiano "Ipe Namui kon-??immerai Kucha."</b></br>



    



    <br>Uno de esos procesos es el planeamiento educativo desde nuestra cosmovicion de tal manera que nuestro saberes y conocimientos sean 

    transmitidos de generacion en generacion mediante el fortalecimiento de la oralidad desde el Naachak y la escritura desde las Instituciones 

    Educativas </br>

     

    <br><center><IMG SRC ="img/tapal.jpg" alt="Generic placeholder image" width="100%" height="100%"></center></br>



    <center><h1>MEMORIAS ANCESTRALES</h1></center>

    <hr>Desde muchos siglos atras la cultura Guambana ha existido con sus propios Usos y Costumbres basada en la ense??anzas de la primeras Autoridades 

    Naturales. A mediados de la decada de los 70 pensamos entre Guambianos y Nazas y otra comunidades del pais con el apoyo de otras organizaciones sociales

    sindicales, religiosos, politicos, universidades, comunidades Afrodecendientes, medios de comunicacion, en recuperar los que nos quitaron desde el 

    a??o 1492 y en los a??os 80 en adelante se unifica el pensamiento de las comunidades: en donde el gran objeto fue "recuperar la tierra para recuperlo todo"

    como el derecho mayor era el mas importante.</br></hr>



    <br>Junto a estas luchas tambien nace la investigacionantropologica, arqueologica a la cabeza del <b><i>Taita Avelino Dagua Hurtado</b></i>, Exgobernantes, algunos lideres de la

    comunidad con el apoyo de solidarios externos al terrritorio.</br>

    <br>

    <br>

      

    <center><IMG SRC ="img/origen.jpg" alt="Generic placeholder image" width="100%" height="100%"></center> 

    <br>

    <center><IMG SRC ="img/territorio.jpg" alt="Generic placeholder image" width="100%" height="100%"></center>

    <br>

    <br>



    <h1><center>IMPACTO DE PENSAMIENTO</center></h1>

    <hr><br>Con este fundamento entra a avanzar el concepto del territorio y su espiral alcanzando a difundir el pensamiento

    en los departamentos del Cauca, Huila, Valle, con sus respectivos municipios. Podemos considerar que es un paso inportante

    de seguir recuperando y fortaleciendo el pensamiento Wampia.Consecuente a este proceso de lucha surge el pensamiento cosmogonico

    de la Originalidad Wampia, como fundamento de identidad propio en su sentido integral (material y espiritual).</hr></br>



    <br>El sentido espiritual que hace el Wam forma demedio de comunicacion propia y natural con un criterio de <b>"MANANASRO KUTRI MANANASRON KATIK"</b>

    es decir que nuestra comunicacion es un instrumento de resistencia y fortalecimiento a los usos y costumbres desde tiempos inmemoriables y que 

    hoy es reconstruido de manera escrita y plasmado en un materia original.</br>



    <br><center><IMG SRC ="img/espiral.png" alt="Generic placeholder image" width="100%" height="100%"></center></br>



    <br><center><IMG SRC ="img/yastau.jpg" alt="Generic placeholder image" width="100%" height="100%"><I>FOTO...SILVIA BARRIO LAS DELICIAS</I></center></br>

    <br>

    <br>



    <h1><center> SE RECONSTRUYE LA EDUCACION PROPIA Y NATURAL</h1></center>



    <hr>En la reconstruccion vital del habla y la escritura Wampia habarca la educacion propia que biene desde el fogon con un sentido integral y armonico con la

    naturaleza contribuyendo a fortalecer procesos de organizacion para el ejercicio de la soberania Wampia revitalizando los procesos locales hacia un orizonte

    equilibrado del pensamiento misak.</hr>



    <h2> La escritura se convierte en un espacio politico y universal</h2>



    porque en este explora y cultiva integralmente los valores practicos en todo tiempo y lugar donde la escritura Wampia contiene todos los aspectos sociales: en lo politico

    economico, cultural y asi llevar el equilibrio, conservaci??n y seguridad en el futuro de los espacios geopoliticos.

    <br>

    <br>



    <br><center><IMG SRC ="img/maestros.jpg" alt="Generic placeholder image" width="100%" height="100%"></center></br>

    <center><IMG SRC="img/yauelo.jpg" alt="Generic placeholder image" width="100%" height="100%"></center>

    <br>

    <br>



    <H1><CENTER>LA GOBERNABILIDAD ANCESTRAL</CENTER></H1>



    <hr>Con base a las cuatro autoridades de la gobernabilidad de <B>YASGUEN, PUBEN, PETECUY Y PAYAN</B> en la territorialidad Wampia, con los fundamentos a este modelo de gobierno seran reconocidos

    los <B>TATAS Y MAMAS</B> actuales para fortalecer, alimentar y conservar nuestra propia politica hacia el sendero de la Confederaci??n integral y armonica basado en la comunicaci??n oral de las

    <B>SHURAS Y SHURES</B> relacionando tambien con el material de la lecto-escritura como la base pedagogica.</hr>

    <br>

    <br> 



    <br><center><IMG SRC="img/taita.jpg" width="320" height="494"><I>FOTO...Taita Vicente Paja EXGOBERNADOR</I></center></br>

    <br><center><IMG SRC="img/cabildo.jpg" alt="Generic placeholder image" width="100%" height="100%"><I>FOTO...Santiago resguardo de Wampia</I></center></br>



    <!-- demo para radio______________________________________________ -->

    <h3 align="center">Nuestro Himno</h3>

    <center><audio src="https://drive.google.com/uc?export=download&id=1qSYKdNBq6iTtfSxwZ_nUsCVGWpZsCpCK" preload="none" controls></audio></center>

    <h5 align="center">Wampia Misak Mera</h5>  



<h2> AUTORIDAD MAYOR DEL PUEBLO MISAK ??DE DONDE VENIMOS?</h2>



<hr>Muchos datos hist??ricos y las memorias del PUEBLO WAMPIAS nos muestran su existencia 

millas de a??os antes de l.492 en este sitio del continente, que luego los invasores denominaron AMERICA,

 en homenaje a uno de los navegantes que llegaron a estas tierras.

Mucho antes de la llegada de los invasores europeos, el pueblo Wampias, junto con otros pueblos vecinos,

 los Totoroes, Kokonucos, Piendamus, Piaguas y otros, hab??amos conformado la CONFEDERACION PUBENENZE con

  sus territorios bien definidos, con sede de Gobierno el YAUTO, ( hoy POPAYAN) ya cuya cabeza se encontr?? el cacique PAYAN.

Este territorio ocupado por el pueblo Wampias y los vecinos que conformaban la Confederaci??n PUBENENZE se

 denominaba originalmente KAUKA. Al llegar los invasores europeos a estas tierras de la CONFEDERACION PUBENENZE

  con Juan de Ampudia a la cabeza y bajo las ??rdenes de Sebasti??n de Belalc??zar, quienes pusieron nuestros pueblos 

  bajo su dominio, creando lo que se llam?? la Gobernaci??n de POPAYAN en un ??rea geogr??fica much??simo mas amplia.</br></hr>



Durante el proceso de destrucci??n, despojo, someimiento y dominio nuestros que los invasores establecieron sobre 

pueblos y organizaci??n del Estado colonial en nuestros territorios, crearon los Virreinatos, Gobernaciones y otras

 entidades territoriales y administrativas, con frecuentes cambios de sedes. Por eso, durante alg??n tiempo, la Gobernaci??n

  de Popay??n dependi?? del virreinato de Quito (hoy capital de la Rep??blica del Ecuador), donde se tomaban las decisiones

   y reparticiones de indios, seg??n el sistema de las encomiendas.



Como todos los pueblos nativos que exist??an en este continente, luego llamado Am??rica, tambi??n fuimos sometidos 

a condiciones de esclavitud en el trabajo en las minas y como cargueros de los invasores.



Al reducirse dram??ticamente la poblaci??n por las matanzas masivas de nativos debido a la tenaz resistencia 

que ofrecimos al sometimiento y dominio de los invasores, el Gobierno Real espa??ol se vio obligado a crear 

el sistema de las Encomiendas, reduci??ndonos socialmente a la servidumbre, lo cual aliviaba un poco el brutal

 tratamiento de bestias a que ??ramos sometidos pero no solucionaba la explotaci??n y opresi??n sobre nuestros pueblos.



En el siglo XVIII el Gobierno Real espa??ol cre?? los resguardos sobre ??reas muy peque??as de lo que han sido los

 territorios ancestrales de nuestros pueblos, otorg??ndoles t??tulos colectivos, las cuales no podr??an ser vendidas a particulares, enajenadas ni podr??an ser objeto de prescripci??n de dominio, supuestamente para darle mayor protecci??n a los nativos porque lo real era que segu??amos siendo v??ctimas de incontables abusos de parte de los invasores y colonizadores.

Despu??s de las guerras de independencia y la creaci??n de las Rep??blicas con sus Estados y Gobiernos criollos de las minor??as dominantes y que para nuestros pueblos no trajo soluciones sino m??s bien el empeoramiento de nuestra situaci??n, tambi??n se sucedieron frecuentes cambios en la conformaci??n de las entidades territoriales y administrativas. Desde los ensayos de organizaci??n del Estado federalista a mediados del siglo XIX, hasta el centralista con la Constituci??n de l.886 y que hasta hoy existe.

Por eso, existi?? el Estado Soberano del Cauca durante el per??odo federalista. Luego surgi?? la divisi??n territorial y administrativa por Departamentos, Municipios, Corregimientos, y veredas, tal como lo conocemos actualmente. De all?? que hoy nos encontremos ubicados en el Sur Occidente de la Rep??blica de Colombia, Nororiente del Departamento del Cauca, Oriente del Municipio de Silvia.

Aunque durante las guerras de independencia y durante los primeros a??os de conformaci??n de la Rep??blica, el Estado y Gobiernos de las minor??as dominantes criollas, algunos de los dirigentes de esos procesos como Antonio Nari??o y Sim??n Bol??var, reconocieron nuestra existencia y algo de nuestros derechos y promovieron algunas leyes a favor nuestro, la verdad es que posteriormente nuestra situaci??n social, pol??tica y jur??dica empeor??, en vez de mejorar, pues en general, esas minor??as dominantes criollas siempre han actuado y act??an en contra nuestra. Esta acci??n sistem??tica en contra de nuestros derechos la podemos comprobar, entre otros tantos testimonios hist??ricos, en la disoluci??n forzosa de la gran mayor??a de resguardos en lo que hoy son los Departamentos de Cundinamarca, Boyac?? y Tolima a mediados del siglo XIX,

Las encomiendas, la mita y los conciertos de los tiempos de la Colonia se acabaron, pero nos impusieron el sistema del terraje en las haciendas de los terratenientes y gamonales pol??ticos, sujeci??n aun peor que las anteriores, la cual se mantuvo hasta los a??os 70 del siglo XX en el Departamento del Cauca y otras regiones de Colombia.

La Ley 89 de l.890 es cierto que reconoci?? los t??tulos de los resguardos pero es igualmente cierto que fij?? el l??mite de 50 a??os para reducir las comunidades ind??genas a ???la vida civilizada???, para integrarnos a la sociedad mayoritaria nacional, es decir, para acabarnos.  

A pesar de todos los cambios que se hayan operado en los procesos de invasi??n, de destrucci??n de pueblos y culturas, de despojo de nuestros territorios y de someimiento ideol??gico, pol??tico y cultural que hasta hoy contin??a, lo importante para nosotros es saber que somos de aqu??. Nacimos aqu??. Vivimos, trabajamos, sufrimos y gozamos aqu?? en lo que nos han dejado y lo que hemos podido recuperar de territorio. Esta es nuestra cuna y desde ella queremos proyectar nuestro futuro colectivo como pueblo.

Antes que llegaran los invasores europeos y antes que las minor??as dominantes criollas crearan sus Rep??blicas, Estados y Gobiernos, exist??amos nosotros como pueblos organizados, con nuestros Gobiernos e identidad cultural. Este es el fundamento de nuestro Derecho Mayor o conjunto de normas y costumbres que regulan nuestra vida interna y las relaciones con la sociedad mayoritaria nacional.

La historia, la memoria y lo que hemos podido recuperar de nuestra cultura son testimonios que fundamentan lo nuestro: Territorio; saberes para el manejo de los recursos naturales; gobiernos para ordenar el uso de los recursos, la convivencia de nuestras comunidades y las relaciones con otros pueblos; pensamiento propio para orientarnos en las relaciones con la naturaleza y con los pueblos vecinos; y cultura como acumulaci??n y resumen de saberes para transmitirlos en la sucesi??n de generaciones.

Y fundamenta lo nuestro la resistencia que hemos sostenido durante cientos de a??os, y de manera especial la lucha desde los a??os 70 del siglo XX hasta ahora, en defensa de nuestros derechos que, a pesar de haber sido reconocidos como derechos de todo el Movimiento de los pueblos ind??genas internamente en Colombia y en la legislaci??n internacional, hoy est??n siendo amenazados y en riego de perderlos. </p>



 <br>

 <br>



<p><h2> ??CUAL ES LA SITUACION QUE VIVIMOS HOY?</h2>



<<hr>Recientemente el Estado y Gobierno colombianos han promovido y aprobado un conjunto de leyes en contrav??a de la Constituci??n de 1.991 que anulan la legislaci??n especial para pueblos ind??genas, como la Ley 715, el C??digo de Minas, la Reforma Pol??tica, la Ley de Justicia y Paz, las Leyes de Bosques, Aguas, P??ramos, de Desarrollo Rural, Decretos y Resoluciones sobre comercializaci??n de productos de origen agropecuario (o normas de la OMC) que amenazan gravemente la estabilidad jur??dica de los t??tulos de los  resguardos, ponen en riesgo nuestros territorios, la  vida comunitaria colectiva,  y todos nuestros derechos.

Toda esta legislaci??n ha sido promovida y aprobada para favorecer a las tras y multinacionales, a los grupos monopolistas criollos, a los nuevos terratenientes narco- paramilitares, a los restos de los viejos terratenientes y a los pol??ticos tradicionales reaccionarios que invaden nuestros territorios, saquean los recursos de nuestros pueblos y del pueblo colombiano, imponiendo el terror mediante masacres y asesinatos en masa, la persecuci??n y la represi??n, el chantaje, la confusi??n y la divisi??n con programas demag??gicos para enga??ar a las comunidades.

Ahora, quien concentra el poder y gobierna en Colombia es la alianza de las tras y multinacionales con  los grupos monopolistas criollos, los nuevos terratenientes narco- paramilitares, los restos de los viejos terratenientes y los pol??ticos tradicionales reaccionarios, que en forma coordinada y combinada, hacen esfuerzos por destruir el ??ltimo basti??n de resistencia contra el autoritarismo que han impuesto en cabeza de su Presidente ??lvaro Uribe Veles.

En las luchas de nuestro pueblo desde los a??os 60, 70 y 80 del siglo XX, recuperamos las tierras del resguardo que nos hab??an arrebatado los terratenientes, recuperamos el cabildo y autoridades de la influencia y dominio de grupos religiosos y de los gamonales pol??ticos que los usaban para cobrar diezmos y para mantener la cauda electoral; hemos logrado algunos avances en la defensa de la autonom??a y en la producci??n, en la recuperaci??n de nuestra cultura, en la educaci??n, en la medicina tradicional y en la jurisdicci??n especial.

A pesar de haber recuperado las tierras del resguardo colonial, era imposible permanecer todos all??, pues la disponibilidad de tierras laborables no lo permit??a. Por eso, tuvimos que ir a otros Municipios vecinos en el Cauca  y otros lugares de los Departamentos del Huila y Valle del Cauca para continuar sobreviviendo. La mayor??a de los que hemos salido, hemos logrado constituir nuevos resguardos y reconstruir poco a poco las  autoridades y nuestra vida comunitaria colectiva. Otros, solo tenemos cabildos pero hacemos esfuerzos por mantener las relaciones comunitarias internas.

Desde hace varios a??os la poblaci??n misak vive un proceso de crecimiento sostenido y de  dispersi??n  desde el punto de vista demogr??fico y geogr??fico. Esta situaci??n crea dificultades pero tambi??n tiene sus potencialidades para la unificaci??n y desarrollo del pueblo Misak.

Desde el punto de vista conceptual, en el pueblo Misak se mueven diferentes grupos y corrientes  ideol??gicas y religiosas. Estas realizan sus actividades proselitistas manteniendo las formas de la cultura misak, por lo menos la m??s esencial que es nuestro idioma. Con ellas queremos que se mantengan y fortalezcan relaciones de respeto, de compresi??n y de solidaridad y que en la medida de sus posibilidades puedan contribuir en el prop??sito de unificaci??n del pueblo Misak.

Desde el punto de vista pol??tico tambi??n se mueven dentro del pueblo Misak diferentes fuerzas y posturas que van desde algunos pocos sectores que a??n conservan influencia de grupos y partidos tradicionales reaccionarios, otros que se han adherido a sectores pol??ticos alternativos, y la tendencia que puede ser mayoritaria y que todav??a conserva y se orienta por los principios del Movimiento de Autoridades Ind??genas de Colombia (AICO), sin que esto quiera decir que comparte el manejo que est?? haciendo el grupo electorero y politiquero que se tom?? este Movimiento.

Con estas fuerzas y posturas tambi??n debemos construir consensos en caso de que siempre los m??s nobles intereses del pueblo Misak: la prolongaci??n de su existencia como pueblo con sus autoridades y su cultura.</br></hr>

<br>

<br>

 



<p><h2> ??HACIA DONDE QUEREMOS IR?</h2>



<hr>La situaci??n de crecimiento demogr??fico y dispersi??n geogr??fica; la grave escasez de tierras que a??n tenemos; las continuas y preocupantes declaraciones de altos funcionarios del Estado y Gobierno colombianos, incluido el Presidente Uribe, expresando tajantemente que ???no habr?? m??s tierras para los ind??genas???; los ilegales impedimentos que han colocado algunas autoridades municipales a la adquisici??n de tierras a nuestros comuneros; la deliberada acci??n pol??tica de movilizar sectores del pueblo colombiano en contra nuestra; y la dispersi??n de objetivos provocada por la influencia de las diferentes fuerzas y posturas pol??ticas dentro de nuestras comunidades, nos han hecho reflexionar; nos han motivado a discutir y emprender la elaboraci??n de una propuesta con vistas a perfilar soluciones de fondo para el futuro de nuestro pueblo.</br></hr>

Desde el a??o 2.003 comenzamos a discutir sobre la posibilidad de unificar las autoridades y cabildos del pueblo Misak. Con una interrupci??n en los a??os 2.005 y 2.006, la agudizaci??n de contradicciones en la comunidad, el cabildo y autoridades de Guamb??a (Silvia), nos oblig?? a retomar la discusi??n, profundizarla y avanzar en la propuesta de constituci??n del NU NAK SHAK como AUTORIDAD MAYOR DEL PUEBLO MISAK para unificarlo y dar un paso m??s en el camino de nuestra autonom??a y autodeterminaci??n.

Vamos hacia la unificaci??n de los bastones de mando. Vamos hacia la unificaci??n de cabildos de nuestro pueblo. Vamos hacia la unificaci??n de nuestras autoridades. Vamos por el m??s grande objetivo que es la unificaci??n de nuestro pueblo Misak.

Aunque estemos dispersos, seguimos trabajando, luchando, pensando y sintiendo como misak. Nuestra decisi??n es continuar luchando por la prolongaci??n de nuestra existencia como pueblo y como cultura.

Nuestra m??xima aspiraci??n es reconstruir econ??mica, social y culturalmente el pueblo Misak. La espiral de crecimiento, seg??n la cosmovisi??n de los misak, nos ayuda a entender que, la dispersi??n demogr??fica y geogr??fica por la que estamos atravesando actualmente, genera la dispersi??n de los fogones de cada familia. Cada familia enciende su nuevo fog??n en cada nuevo sitio donde se instala. Por esto es necesario que los muchos fogones nuevos que hemos encendido dispersos, se integren en el NU NAK SHAK. Es decir, el NU NAK SHAK representa la uni??n de todas las familias. La uni??n de las familias, exige la uni??n de las autoridades y cabildos. La uni??n de los cabildos hace la uni??n de los bastones de mando. Y todo esto nos dar?? como resultado la unificaci??n del pueblo Misak.

Consideramos que es la forma natural y propia de reencontrarnos e integrarnos, reconstruir nuestras autoridades, la educaci??n y la cultura desde el fog??n, reconstruir la autoridad desde la familia, desde las comunidades para todo el pueblo misak. Debe ser por tanto, un especio libre en el que se re??nan nuestras autoridades a resolver los problemas que nos referimos. No precisamos para esto de personer??as jur??dicas, pues la jurisdicci??n especial ind??gena ha definido que ???los cabildos son entidades de derecho p??blico especial??? y la uni??n de los mismos es parte de esa jurisdicci??n.

Es la forma m??s adecuada de reconstrucci??n de las relaciones internas de solidaridad colectiva desde las familias, las comunidades y el pueblo misak. Proceso que debe contribuir tambi??n a la construcci??n de relaciones solidarias con los dem??s pueblos ind??genas y con el pueblo colombiano pues las amenazas a las que estamos enfrentados con las pol??ticas del Estado y Gobierno colombianos no son ??nicamente para el pueblo Misak. Esas amenazas son para todos los pueblos ind??genas y para el pueblo colombiano. Este es el motivo por el cual debemos solidarizarnos, apoyarnos y unirnos para luchar juntos.

Con esta uni??n de cabildos, de taitas y mamas de nuestro pueblo Misak, estamos dando un paso trascendental en la reconstrucci??n de nuestra autoridad mayor y en la preparaci??n para la defensa de nuestros derechos, sobre todo hoy cuando se encuentran amenazados por las pol??ticas que han puesto en marcha el Estado y Gobierno colombianos.

Esta autoridad mayor asume desde ya una responsabilidad muy grande ante nuestro pueblo: Orientarlo en la lucha por la defensa de nuestros derechos. Apoyar y acompa??ar a los dem??s pueblos ind??genas y al pueblo colombiano en la lucha por la defensa de sus derechos. </p>

<br>

<br>

 



<p><h2>??PARA QU?? EL NU NAK CHAK, AUTORIDAD MAYOR DEL PUEBLO MISAK?</h2>



<hr>Para luchar por la unificaci??n de nuestro pueblo Misak. La dispersi??n demogr??fica y geogr??fica en que nos encontramos por la escasez de tierras laborables en lo que nos dejaron de territorio ancestral y la imposibilidad de adquirirlas en sitios aleda??os, nos ha obligado a salir a otros lugares, tendencia que continuar?? porque all?? sigue siendo muy grave la escasez de tierras para trabajar y sostener nuestras familias. Esa dispersi??n puede conducir a la disoluci??n irreversible de nuestro pueblo y nuestra cultura. Por eso, estamos obligados tambi??n a hacer grandes esfuerzos para unificar nuestras autoridades y cabildos, nuestras comunidades y nuestro pueblo.

Para luchar por la defensa de nuestros territorios que ya hemos logrado recuperar y hacer lo que sea posible hacer para su ampliaci??n.</br></hr>

Para hacer realidad el gran sue??o que tenemos todos los pueblos ind??genas, de la RECONSTRUCCION ECONOMICA, SOCIAL Y CULTURAL, en este caso, de nuestro pueblo Misak.

Para hacer cada d??a mas firmes y fuertes nuestras autoridades en cada una de las comunidades y en todo el pueblo Misak.

Para consolidar nuestra autonom??a frente al Estado y Gobierno colombianos, los actores armados y dem??s fuerzas econ??micas y pol??ticas del pa??s.

Para organizar y desarrollar pol??ticas de seguridad y soberan??a alimentarias y fortalecer la producci??n agroalimentaria propia.

Para avanzar en la reconstrucci??n de nuestros valores culturales, para lo cual debemos continuar y profundizar los trabajos de investigaci??n hist??rica y de memoria.

Para fortalecer y mantener nuestra identidad cultural como pueblo Misak y poder garantizar as?? la permanencia cultural en el tiempo y en el espacio. 

Para luchar por la defensa de los derechos que hemos logrado recuperar con el esfuerzo de todo el Movimiento Ind??gena, del apoyo solidario del pueblo colombiano y de nuestra propia lucha. </p>

<br>

<br>

 



<p><h2>??SOBRE QU?? ORIENTACIONES Y PRINCIPIOS DEBEMOS CONSTRUIR NUESTRA AUTORIDAD MAYOR (NU NAK SHAK) MISAK?</h2>



<hr>1.- En la cultura Misak existi?? y aun subsiste el principio de lat??-lat?? o principio de igualdad (=), de reciprocidad o beneficio compartido. Este principio de nuestra cultura, se ha debilitado mucho y tiende a desaparecer por la fuerza de la civilizaci??n dominante de la sociedad mayoritaria nacional, que a su vez, es la civilizaci??n universal dominante, de la explotaci??n y dominaci??n de los m??s fuertes sobre los m??s d??biles, de la discriminaci??n por razones econ??micas, sociales, pol??ticas, culturales, etc.</br></hr>

Para la construcci??n de nuestra AUTORIDAD MAYOR debemos reconstruir ese principio de lat??-lat?? o principio de igualdad, de reciprocidad o beneficio compartido. No hay ni podr?? haber unos cabildos m??s importantes que otros. No hay ni podr?? haber un o unos cabildos que mandan y otros que obedecen. Ning??n cabildo puede considerarse due??o del poder y de la capacidad de decisi??n sobre los dem??s. Todos somos iguales y tenemos derechos iguales. En nuestra AUTORIDAD MAYOR (NU NAK SHAK) no podr?? haber autoridades que decidan por encima de las dem??s, ni unas comunidades superiores a otras porque tienen m??s poblaci??n o porque reciben transferencias o reciben m??s que otras.

</p>

 



<p>2.- La participaci??n en la conformaci??n de nuestra AUTORIDAD MAYOR es completamente libre y voluntaria de las autoridades y cabildos. A ninguna autoridad y cabildo se le puede obligar a hacer parte del NU NAK SHAK y que permanezca all??. Pero si hace parte de la AUTORIDAD MAYOR deber?? siempre seguir las orientaciones y decisiones colectivas que ella adopte. Los cabildos y dem??s autoridades conservan su autonom??a en las decisiones que deben tomar para resolver los problemas de cada una de sus comunidades. Pero cuando se trata de decisiones para todo el pueblo Misak, no podr?? adoptarlas unas autoridades o cabildos por encima y sin consultar con los dem??s.</p>



<p>3.- La AUTORIDAD MAYOR del pueblo Misak est?? obligada a acompa??ar la lucha por la defensa y el reconocimiento de los derechos de los dem??s pueblos ind??genas y del pueblo colombiano. Si nosotros luchamos y exigimos el reconocimiento de nuestros derechos, debemos reconocer los derechos de los dem??s. Lucharemos dentro de nuestras autoridades y comunidades por mantener y construir unas relaciones solidarias y de apoyo mutuo con los dem??s pueblos ind??genas, con los campesinos, afro colombianos y en general con el pueblo colombiano.</p>



 



<p>4.- Como pueblo y como cultura, tenemos el derecho a continuar existiendo en condiciones dignas. Por eso, seguiremos luchando por ampliar nuestros territorios. Esta lucha no la hacemos por capricho sino porque es imposible sobrevivir en el reducido espacio que nos dejaron. Solo que esta ampliaci??n queremos hacerla donde haya posibilidades, sin crear conflictos con otros pueblos ind??genas, con campesinos o con afro colombianos.</p>



<p>5.- Nuestra AUTORIDAD MAYOR debe continuar y avanzar en la lucha por la defensa de nuestros derechos frente al Estado y Gobiernos colombianos, mantener esa relaci??n de autoridad a autoridad y procurando que nuestras autoridades sean reconocidas, respetadas y aceptadas como lo que realmente son: autoridades de nuestros pueblos. Las relaciones que las autoridades de los pueblos ind??genas deben mantener con el Estado y Gobierno colombianos, por ahora y por mucho tiempo no podr??n ser relaciones de amistad y menos de solidaridad. Son relaciones de conflicto porque a todo momento y por diferentes medios desconocen nuestros derechos. Sus pol??ticas, sus leyes, programas y acciones est??n hechos y promovidos para acabarnos, para exterminarnos f??sica y culturalmente.</p>



 



<p>6.- La AUTORIDAD MAYOR de nuestro pueblo Misak no es ni puede ser el fruto de un acto de posesi??n por muy importante que este sea. Su consolidaci??n ser?? el resultado de un trabajo constante e intenso con las autoridades y comunidades para aclarar su significado, su importancia y el papel que debe cumplir; de socializaci??n entre las autoridades, dirigentes y comunidades misak para que sean consientes de lo que representen nuestra AUTORIDAD MAYOR en la unificaci??n de nuestro pueblo; de la realizaci??n de asambleas en cada uno de los cabildos, resguardos y comunidades y que sean ellos quienes le dan la fuerza y ??????legitimidad necesaria para ejercer sus funciones como tal AUTORIDAD MAYOR.</p>



<p>7.- La AUTORIDAD MAYOR de nuestro pueblo Misak no es ni puede ser la simple uni??n de los cabildos existentes ni puede ser otro cabildo m??s grande que act??a y decide por encima de las comunidades y sus cabildos. Esta instancia mayor de autoridad tenemos que construirla desde las bases, desde las comunidades, desde los comuneros y sus familias, desde y al calor de cada uno de los fogones encendidos y de las luchas de resistencia social, pol??tica y cultural de nuestro pueblo. Ser??n por lo tanto, los logros alcanzados en la recuperaci??n de la econom??a propia, el fortalecimiento de la lucha de resistencia por la defensa de nuestros derechos y la reconstrucci??n del pensamiento y cultura propia, los indicativos m??s claros que demuestren si estamos cumpliendo con lo que nos ha encomendado el pueblo Misak o no.</p>



 



<p>8.- La evaluaci??n es, con mayor raz??n en este caso, una herramienta que nos permite, momento a momento, seguir la huella de lo que vamos haciendo o dejando de hacer y comprobar si estamos avanzando o no. Pero la evaluaci??n no la podemos reducir simplemente a hacer listados de lo que hicimos o dejamos de hacer. M??s que esos listados, la evaluaci??n hay que acompa??arla de un gran deseo de superaci??n individual y colectiva y de un s??lido esp??ritu cr??tico, tanto para se??alar los errores como para presentar propuestas de soluci??n y superaci??n de los mismos.</p>



<p>9.- M??s que voluminosos planes y programas; m??s que repetidos diagn??sticos y sucesiones de cuadros estad??sticos, lo que necesitamos es REALIZAR muchas tareas sencillas, ejecutar acciones pr??cticas para resolver multitud de peque??os problemas acumulados que vienen generando graves situaciones en nuestras comunidades. De menudos problemas estamos llenos. De peque??os conflictos estamos saturados, sobre todo en algunos de los cabildos, entre las autoridades y dirigentes, en los comuneros y en las familias. Esta situaci??n nos ha hecho perder de vista los verdaderos y grandes problemas que padece todo nuestro pueblo Misak, los dem??s pueblos ind??genas y el pueblo colombiano. Nos ha hecho perder de vista el horizonte y las perspectivas hacia donde debemos caminar. E incluso, nos ha hecho perder de vista quienes son los verdaderos enemigos principales de nuestro pueblo, de los dem??s pueblos ind??genas y del pueblo colombiano. Por andar buscando responsables de los hombres que padecemos donde no est??n; por buscar a quien echarle la culpa de nuestra lamentable situaci??n en el lugar equivocado, y por no querer reconocer que muchos de esos hombres los causamos nosotros mismos por no reconocer los errores, nos encontramos ante una situaci??n muy cr??tica de p??rdida de confianza de los comuneros en las autoridades, en los dirigentes y en sus propias fuerzas. Por todo esto, lo que necesita hacer nuestra AUTORIDAD MAYOR, es asumir con mucha prudencia s?? pero con mucha firmeza tambi??n,</p>

      

    </article>

  </div>



      <!-- termina rese??a historica___________________________________________________________________________________________-->



      <!-- INICIAR LAS CARACTER??STICAS-->



      <hr class="featurette-divider">



      <div class="row featurette">

        <div class="col-md-7">

          <h2 class="featurette-heading">Nuestra ALA KUSREIK YA <span class="text-muted">Misak Universidad</span></h2>

          <p class="lead">ALA KUSREIK YA- Misak Universidad, busca la construcci??n de un sistema educativo propio que sirva de plataforma en la recuperaci??n de los saberes, identidad y cultura del pueblo Misak, y c??mo, para conseguir este prop??sito, los Misak han vinculado tanto a la arquitectura de la universidad, como a los contenidos de la educaci??n que ofrece, su cosmovisi??n,  identidad, y pensamientos sobre el ser Misak, basados en los principios de  escuchar, ver, pensar y hacer.</p>

        </div>

        <div class="col-md-5">

          <br><img src="img/misaku.jpg"  alt="Generic placeholder image" width="100%" height="100%">

        </div>

      </div>

      

      <hr class="featurette-divider">





      <!--Inicia segundo sector-->



      <div class="row featurette">

        <div class="col-md-7 col-md-push-5">

          <h2 class="featurette-heading">Ubicacion  <span class="text-muted">Wampia Cauca</span></h2>

          <p class="lead">El territorio guambiano se encuentra ubicado al oriente del departamento del Cauca municipio de Silvia suroccidente Colombiano, en las estribaciones de la cordillera central, en el p??ramo de las Delicias y Moras, en el Municipio de Silvia, departamento del Cauca, a 60 Km de la capital Popay??n. Guamb??a se encuentra entre los paralelos 2?? 45??? de latitud norte, y los meridianos76?? 15??? y 76?? 00??? de longitud oeste del meridiano de Greenwich, con altitudes que van desde los 2500 a 3800 metros sobre el nivel del mar, con una temperatura media que oscila entre 10??c y 14??c. 

Los l??mites actuales son:  

Al norte: con los Resguardos Ind??genas P??ez de Pitayo y Mosoco; al oriente: con el Resguardo Ind??gena P??ez de Yaquiv?? y el corregimiento de Gabriel L??pez, municipio de Totor??; al sur: con la cabecera municipal de Silvia; al occidente: con el Resguardo Ind??gena P??ez de Quichaya y el Resguardo Ind??gena Guambiano de Quizgo 

</p>

        </div>

        <div class="col-md-5 col-md-pull-7">

          <br><img src="img/ubicacion.jpg"  alt="Generic placeholder image" width="100%" height="100%">

        </div>

      </div>



    <!--Termina segundo sector-->



      <hr class="featurette-divider">



      <div class="row featurette">

        <div class="col-md-7">

          <h2 class="featurette-heading">Ense??anzas a las <span class="text-muted">Nuevas Generaciones.</span></h2>

          <p class="lead">Nam yu pirau manakutri warapel?? kui katipe isuil?? t??kar, wam t??kar, kemakuil?? t??kar tret??wai chik??pen maril?? t??kar kuinapent?? m??iyasr??mpe nampe tre tap nepua ashmel?? amtruinatan kanmaipe wampikelant?? tap k??tanmap m??r??p; trek kuint??kucha nam Misak kui katipe namui shurmerai n??tr?? aship kusreilan kat??le isua mur mar??p p??ntramik palan; isuinuk kutri namui wamyu katik</p>

        </div>

        <div class="col-md-5">

         <br><img src="img/nuevasgener.jpg"  alt="Generic placeholder image" width="100%" height="100%">

        </div>

      </div>



      <hr class="featurette-divider">





      <!-- /FINALIZAR LAS CARACTER??STICAS -->
      <center><p class="numero"><?php echo contar_usuarios(); ?>???????</p>
      </center>


<?php  require 'footer.php'; ?>
