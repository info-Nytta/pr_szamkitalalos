<?php
$min=1;
$max=100;
$tipp=1;
$valasz="";
$ok=false;
$szam=floor(($min+$max)/2);
$tippek="";
$valasztas="";

if ($jatekos=='gg') {
    include('gepgondol.php');
    $valasztas="
    <input type='number' name='x' min='$min' max='$max' required autofocus>
    ";
}
else if ($jatekos=='jg') {
    include('jatekosgondol.php');
    $valasztas="
    <input type='text' name='x' value='$szam' readonly>
    <select name='valasz' required autofocus>
        <option value='0'></option>      
        <option value='1'>kisebb</option>      
        <option value='2'>nagyobb</option>      
        <option value='3'>eltaláltad</option>      
    </select>
    ";
}
else
    header('Location: ./');
?>

    <p class='pontok'>
    <?php echo "Játékos: ".$_SESSION[$jatekos]['jatekos']." / Gép: ".$_SESSION[$jatekos]['gep']; ?>
    </p>

    <h2><?php echo $gondol?> gondol</h2>
    
<? include('jelki.php'); ?>

    <h3><?php echo $tippel?> tippjei</h3>
    <p>
    <?php echo $tippek; ?>
    </p>

    <?php if (!$ok) { ?>
			<form method='GET'>
			<?php echo $tipp; ?>. tipp: 
			<input type='hidden' name='jatek' value='gep'>
			<input type='hidden' name='tipp' value='<?php echo $tipp; ?>'>
			<input type='hidden' name='min' value='<?php echo $min; ?>'>
			<input type='hidden' name='max' value='<?php echo $max; ?>'>
            <input type='hidden' name='jatek' value='<?php echo $jatekos;?>'>
			<input type='hidden' name='tippek' value='<?php echo $tippek; ?>'>

            <?php echo $valasztas; ?>
			
			<input type='submit' value='mehet'>
			</form>
			<?php } ?>


