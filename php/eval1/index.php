<?php
$eleve="NEDJAR SMAIL"; // Merci de modifier cette ligne en remplaçant la chaine de caractère avec vos NOM et Prénom.
$exo=0; //Ne pas modifier cette ligne
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eval. | <?= $eleve; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		p {text-align: justify;}
		table {margin: auto;}
		tbody, td, tfoot, th, thead, tr {padding: 0px;}
	</style>
</head>
<body>
	<header class="container">
		<h1 class="display-4 p-5">Evaluation PHP de <strong><?= $eleve; ?></strong></h1>
	</header>
	<main >
		<section class="container-fluid p-5 bg-dark">
			<h2 class="display-6 text-center text-white">1. LES BASES DE PHP</h2>
		</section>
		<section class="container p-5">
			<article id="<?= ++$exo; ?>">
				<h3 class="display-6 mb-2">Exercice <span class="badge fs-4 bg-success">#<?= $exo; ?></span></h3>
				<p>Déclarer une variable (nom au choix), lui affecter une valeur numérique (entier) et l'afficher dans un paragraphe <code>&lt;p&gt;</code>.</p>
				<?php
					$var = 42;?>
					<p> <?= $var;?></p>
				<hr/>
			</article>
			<article id="<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-success">#<?= $exo; ?></span></h3>
				<p>Tester si la variable déclarée dans l'exercice #1 est paire ou impaire et afficher le résultat dans un paragraphe <code>&lt;p&gt;</code>.</p>
				<?php
				if ($var % 2 == 0) {?>
					<p> <?= $var ?> est paire </p>
				<?php }
				else {?>
					<p><?= $var ?> est impaire</p>
				<?php }?>
				<hr/>
			</article>
			<article id="<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-success">#<?= $exo; ?></span></h3>
				<p>Afficher tous les entiers de 0 à la valeur de la variable déclarée dans l'exercice #1 dans une liste <code>&lt;ul&gt;</code></p>
				<ul>
				<?php
					for ($i=0; $i <= $var; $i++) {?>
					<li><?php echo $i ?></li>
				<?php }?>
				</ul>
				
				<hr/>
			</article>
			<article id="<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-success">#<?= $exo; ?></span></h3>
				<p>Déclarer une fonction qui retourne le carré du nombre donné en paramètre, l'appeler avec la variable de l'exercice #1 et afficher le résultat dans un paragraphe <code>&lt;p&gt;</code>.</p>
				<?php
					function carre($var) {
						$carre = $var * $var;
						return $carre;
					}?>
					<p><?php echo carre($var);?></p>
				<hr/>
			</article>
			<article id="<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-success">#<?= $exo; ?></span></h3>
				<p>Déclarer un tableau indexé, lui affecter plusieurs valeurs et les afficher dans une liste <code>&lt;ul&gt;</code>.</p>
				<?php
					$tableau = [5, 6, 10, 12, 42, 85, 98, 2];?>
					<ul>
						<?php foreach ($tableau as $value) {?>
							<li>
								<?= $value;?>
							</li>
						<?php } ?>
					</ul>
				<hr/>
			</article>
			<article id="<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-success">#<?= $exo; ?></span></h3>
				<p>Déclarer un tableau associatif, lui affecter plusieurs valeurs et les afficher dans un tableau <code>&lt;table&gt;</code>. (Une colonne pour la clé, une colonne pour la valeur)</p>
				<?php
					$tab_associatif = 
					["nom" =>"perelman", "prenom" =>"grigory", "age" =>"45"]?>
					<table>
						<thead>
							<tr>
								<th>cle</th>
								<th>valeur</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								foreach($tab_associatif as $clef => $valeur){?>	
									<tr><td><?= $clef; ?></td>
									<td><?= $valeur; ?>&nbsp; </td></tr>
							<?php } ?> 
						</tbody>
					</table>		
				<hr/>
			</article>
			<article id="<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-success">#<?= $exo; ?></span></h3>
				<p>Afficher les données du tableau PHP à 2 dimensions <code>$tableau</code> (cf. code source) dans un tableau HTML <code>&lt;table&gt;</code>. (Un <code>&lt;tr&gt;</code> par case de <code>$tableau</code>, un <code>&lt;td&gt;</code> par case de <code>$tableau[$i]</code>)</p>
				<?php
					$tableau = [
						["&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;"],
						["&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;"],
						["&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;"],
						["&#11036;","&#11036;","&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;","&#11036;","&#11036;"],
						["&#11036;","&#11036;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11036;","&#11036;","&#11036;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11036;","&#11036;","&#11036;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11036;","&#11036;","&#11036;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11036;","&#11036;"],
						["&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;"],
						["&#11036;","&#11035;","&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11035;","&#11036;","&#11035;","&#11036;"],
						["&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11036;","&#11035;","&#11036;"],
						["&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11035;","&#11035;","&#11036;","&#11035;","&#11035;","&#11036;","&#11036;","&#11036;","&#11036;"],
						["&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;","&#11036;"]
					];?>
					<table>
						<tbody>
							<tr>
								<?php 
								 for ($i = 0; $i < count($tableau); $i++) {?>
									<tr>
										<?php for ($j = 0; $j < count($tableau[0]); $j++) {?>
											<td><?= $tableau[$i][$j];?></td>
										<?php } ?> 
									</tr>
								<?php }?>
						</tbody>
					</table>
				<hr/>
			</article>
			<article id="<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-warning">#<?= $exo; ?></span></h3>
				<p>Sur le même principe que l'exercice précédent, créer cette fois une routine qui prend en paramètre un tableau à 2 dimensions et qui affiche ses données dans un tableau HTML <code>&lt;table&gt;</code>. (Un <code>&lt;tr&gt;</code> par case de <code>$tableau</code>, un <code>&lt;td&gt;</code> par case de <code>$tableau[$i]</code>)<br/>Lorsque la valeur de la case du tableau PHP vaut "O", afficher le caractère HTML "<code>&amp;#11036;</code>" dans la case du tableau correspondante, si la valeur vaut "0" (zéro), afficher le caractère HTML  "<code>&amp;#11035;</code>".<br/>Appeler la fonction créée avec la variable <code>$tableau</code> en paramètre.</p>
				<?php
					$tableau = [
						["O","O","O","O","O","O","O","O","O","O","O","O","O","O","O","O","O"],
						["O","O","O","O","O","O","O","O","O","0","0","0","0","0","0","O","O"],
						["O","O","O","O","O","O","O","O","0","0","O","0","0","0","0","0","O"],
						["O","O","O","O","O","O","O","O","0","0","0","0","0","0","0","0","O"],
						["O","O","O","O","O","O","O","O","0","0","0","0","O","O","O","O","O"],
						["O","O","O","O","O","O","O","O","0","0","0","0","0","0","0","0","O"],
						["O","O","O","O","O","O","O","O","0","0","0","0","0","0","0","O","O"],
						["O","0","O","O","O","O","O","0","0","0","0","O","O","O","O","O","O"],
						["O","0","O","O","O","O","0","0","0","0","0","O","O","O","O","O","O"],
						["O","0","0","O","O","0","0","0","0","0","0","0","0","O","O","O","O"],
						["O","0","0","0","0","0","0","0","0","0","0","O","0","O","O","O","O"],
						["O","O","0","0","0","0","0","0","0","0","0","O","O","O","O","O","O"],
						["O","O","O","0","0","0","0","0","0","0","0","O","O","O","O","O","O"],
						["O","O","O","O","0","0","0","O","0","0","O","O","O","O","O","O","O"],
						["O","O","O","O","O","0","O","O","O","0","O","O","O","O","O","O","O"],
						["O","O","O","O","O","0","O","O","O","0","O","O","O","O","O","O","O"],
						["O","O","O","O","O","0","0","O","O","0","0","O","O","O","O","O","O"],
						["O","O","O","O","O","O","O","O","O","O","O","O","O","O","O","O","O"]
					];
					function tableau ($tableau) {?>
						<table>
						<tbody>
							<tr>
								<?php 
								 for ($i = 0; $i < count($tableau); $i++) {?>
									<tr>
										<?php for ($j = 0; $j <count($tableau[0]); $j++) {?>
											<td>
												<?php
													if( $tableau[$i][$j]==0) {
														echo "&#11036;";
													}
													else {
														echo "&#11035;";
													}
												;?>
											</td>
										<?php } ?> 
									</tr>
								<?php }?>
						</tbody>
					</table>
					<?php } tableau($tableau)?>
				<hr/>
			</article>
		</section>
		<?php $exo=0; ?>
		<section class="container-fluid p-5 bg-dark">
			<h2 class="display-6 text-center text-white">2. LES FORMULAIRES</h2>
		</section>
		<section class="container p-5">
			<article id="2-<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-success">#<?= $exo; ?></span></h3>
				<p>Saisir une valeur dans le formulaire ci-dessus, valider et l'afficher dans un paragraphe <code>&lt;p&gt;</code>.</p>
				<form action="index.php#2-<?= $exo; ?>" id="form1" method="post">
					<div class="row mb-3">
						<label for="input1" class="col-2 form-label">Saisissez une valeur</label>
						<div class="col-10">
							<input type="text" class="form-control" id="input1" name="input1">
						</div>
					</div>
					<div class="row">
						<div class="col-10 offset-2">
							<input type="hidden" name="sent1">
							<button type="submit" class="btn btn-dark">Valider</button>
						</div>
					</div>
				</form>
				<?php
					if (isset($_POST['input1'])) {
						echo"<p>" . htmlspecialchars($_POST['input1']) . "</p>";
					}
				?>
				<hr/>
			</article>
			<article id="2-<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-success">#<?= $exo; ?></span></h3>
				<p>Saisir des valeurs dans le formulaire ci-dessus, valider et les afficher "proprement".</p>
				<form action="index.php#2-<?= $exo; ?>" id="form2" method="post">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="bob" id="check1" name="check1">
						<label class="form-check-label" for="check1">Choix 1 : bob</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="alice" id="check2" name="check2">
						<label class="form-check-label" for="check2">Choix 2 : alice</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="perelman" id="check3" name="check3">
						<label class="form-check-label" for="check3">Choix 3 : perelman</label>
					</div>
					<div class="row">
						<div class="col-10 offset-2">
							<input type="hidden" name="sent2">
							<button type="submit" class="btn btn-dark">Valider</button>
						</div>
					</div>
				</form>
				<?php
					if (isset($_POST['check1'])) {
						echo "<p>vous avez fait le choix1 : " . htmlspecialchars($_POST['check1']) . "</p>";
					}
					if (isset($_POST['check2'])) {
						echo "<p>vous avez fait le choix 2 : " . htmlspecialchars($_POST['check2']) . "</p>";
					}
					if (isset($_POST['check3'])) {
						echo "<p>vous avez fait le choix 3 : " . htmlspecialchars($_POST['check3']) . "</p>";
					}

				?>
				<hr/>
			</article>
			<article id="2-<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-success">#<?= $exo; ?></span></h3>
				<p>Saisir des valeurs dans le formulaire ci-dessus, valider et les afficher "proprement".</p>
				<form action="index.php#2-<?= $exo; ?>" id="form3" method="post">
					<fieldset>
						<p class="my-2">Question 1 :</p>
						<div class="form-check">
							<input class="form-check-input" type="radio" value="bob" id="radio1" name="radio1">
							<label class="form-check-label" for="radio1">Choix 1 : bob </label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" value="alice" id="radio2" name="radio1">
							<label class="form-check-label" for="radio2">Choix 2 : alice</label>
						</div>
					</fieldset>
					<fieldset>
						<p class="my-2">Question 2 :</p>
						<div class="form-check">
							<input class="form-check-input" type="radio" value="perelman" id="radio3" name="radio2">
							<label class="form-check-label" for="radio3">Choix 3 : perelman</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" value="einstein" id="radio4" name="radio2">
							<label class="form-check-label" for="radio4">Choix 4 : einstein</label>
						</div>
						<div class="row">
							<div class="col-10 offset-2">
								<input type="hidden" name="sent3">
								<button type="submit" class="btn btn-dark">Valider</button>
							</div>
						</div>
					</fieldset>
				</form>
				<?php
					if (isset($_POST['radio1'])) {
						echo "<p> votre choix pour la question 1 est : ". htmlspecialchars($_POST['radio1']). "</p>";
					}
					if (isset($_POST['radio2'])) {
						echo "<p> votre choix pour la question 2 est : ". htmlspecialchars($_POST['radio2']). "</p>";
					}
				?>
				<hr/>
			</article>
			<article id="2-<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-success">#<?= $exo; ?></span></h3>
				<p>A partir du tableau <code>$tableau</code> fourni, générer une liste déroulante <code>select</code>/<code>option</code>.<br/>Sélectionner une valeur dans la liste, valider et afficher le résultat "proprement".</p>
				<form action="index.php#2-<?= $exo; ?>" id="form4" method="post">
					<?php
						$tableau=[
							["id"=>1,"valeur"=>"Hello World !"],
							["id"=>2,"valeur"=>42],
							["id"=>3,"valeur"=>"toto"],
							["id"=>4,"valeur"=>"titi"],
							["id"=>5,"valeur"=>"tata"],
							["id"=>6,"valeur"=>"je manque vraiment d'inspiration"]
						];?>
						<select name="selection" id="">
							<?php foreach($tableau as $row) {?>
								<option value="<?php echo htmlspecialchars($row["id"]);?>"> <?= htmlspecialchars($row["valeur"]);?></option>
							<?php } ?>
						</select>

						<?php
						if (isset($_POST["selection"])) {
							foreach($tableau as $key=>$row) {
								if ($row['id'] == $_POST["selection"]) {
									echo "<p>". htmlspecialchars($row['valeur']). "</p>";
								}
							}	
						}
						?>
					<div class="row">
						<div class="col-10 offset-2">
							<input type="hidden" name="sent4" >
							<button type="submit" class="btn btn-dark">Valider</button>
						</div>
					</div>
				</form>
				<hr/>
			</article>
			<article id="2-<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-warning">#<?= $exo; ?></span></h3>
				<p>Faire un formulaire d'envoi de fichier, qui enregistre le fichier dans le répertoire courant (celui où se trouve cette page).</p>
				<form action="index.php#2-<?= $exo; ?>" id="form5" method="post" enctype="multipart/form-data">
						<label for="upload"></label>
						<input type="file" name="upload" >
					<?php
						date_default_timezone_set('Europe/Paris');
						function generateFilename($filename, $title) {
							$extension=pathinfo($filename, PATHINFO_EXTENSION);
						
							$arrayko = [" "];
							$arrayok = ["-"];
							$title = str_replace($arrayko, $arrayok, $title);
							return date("Y_m_d_h_i_s")."_".strtolower($title.'.'.$extension);
						}
						if (isset($_FILES["upload"])) {
							$nom_fichier_sans_extension = pathinfo($_FILES["upload"]['name'], PATHINFO_FILENAME);
							$filename  = generateFilename($_FILES['upload']['name'], $nom_fichier_sans_extension);
    						move_uploaded_file($_FILES['upload']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/".$filename);	
						}	
					?>
					<div class="row">
						<div class="col-10 offset-2">
							<input type="hidden" name="sent5">
							<button type="submit" class="btn btn-dark">Valider</button>
						</div>
					</div>
				</form>
				<hr/>
			</article>
			<article id="2-<?= ++$exo; ?>">
				<h3 class="display-6 mt-4 mb-2">Exercice <span class="badge fs-4 bg-danger">#<?= $exo; ?></span></h3>
				<p>Faire un formulaire d'envoi et de traitement d'image, qui enregistre l'image (réduite et/ou cropée) dans le répertoire courant (celui où se trouve cette page).</p>
				<form action="index.php#2-<?= $exo; ?>" id="form6" method="post" enctype="multipart/form-data">
						<label for="upload2"></label>
						<input type="file" name="upload2" >
					<?php
						
						function generateFilename2($filename, $title) {
							$extension=pathinfo($filename, PATHINFO_EXTENSION);
						
							$arrayko = [" "];
							$arrayok = ["-"];
							$title = str_replace($arrayko, $arrayok, $title);
							return date("Y_m_d_h_i_s")."_".strtolower($title.'.'.$extension);
						}
						if (isset($_FILES['upload2'])) {
							$extension = strtolower(pathinfo($_FILES["upload2"]['name'], PATHINFO_EXTENSION));
							if ( $extension == "jpeg" || $extension == "jpg" || $extension == "png" || $extension == "gif" ) {
								$nom_fichier_sans_extension = pathinfo($_FILES["upload2"]['name'], PATHINFO_FILENAME);
								$fichier_temp = $_FILES['upload2']['tmp_name'];
								$fichier_nom_upload = $_FILES['upload2']['name'];
								$largeur_max_image = 500;
								$hauteur_max_image = 500;
								
								$image_info = getimagesize($fichier_temp);
								$image_upload_largeur = $image_info[0];
								$image_upload_hauteur = $image_info[1];

								$ratio =min($largeur_max_image/$image_upload_largeur, $hauteur_max_image/$image_upload_hauteur);	
								$nouvelle_largeur_image = ceil($image_upload_largeur* $ratio);
								$nouvelle_hauteur_image= ceil($image_upload_hauteur * $ratio);

								
								if ($extension == 'jpg' || $extension == 'jpeg') {

									$image = imagecreatefromjpeg($fichier_temp);
								} elseif ($extension == 'png') {

									$image = imagecreatefrompng($fichier_temp);
								} elseif ($extension == 'gif') {

									$image = imagecreatefromgif($fichier_temp);
								} 
							
								$nouvelle_image = imagecreatetruecolor($nouvelle_largeur_image, $nouvelle_hauteur_image);
								$nouveau_nom= generateFilename2($fichier_nom_upload, $nom_fichier_sans_extension);
								imagesavealpha($nouvelle_image, true);
								imagealphablending($nouvelle_image, false);
								$chemin_upload = $_SERVER['DOCUMENT_ROOT']."/".$nouveau_nom;
								imagecopyresized($nouvelle_image, $image, 0, 0, 0, 0, $nouvelle_largeur_image, $nouvelle_hauteur_image, $image_upload_largeur, $image_upload_hauteur);
								
								
								if ($extension=='jpg' || $extension=='jpeg') {
									imagejpeg($nouvelle_image, $chemin_upload);
								}
								else if ($extension=='png') {
									imagepng($nouvelle_image, $chemin_upload);
								}
								else if ($extension=='gif') {
									imagegif($nouvelle_image, $chemin_upload);
								}
							}
							else {
								echo "type de fichier nom autorisé";
							}
						}
					?>
					<div class="row">
						<div class="col-10 offset-2">
							<input type="hidden" name="sent6">
							<button type="submit" class="btn btn-dark">Valider</button>
						</div>
					</div>
				</form>
				<hr/>
			</article>
		</section>
	</main>
</body>
</html>