<div style="text-align: center; margin-top: 50px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    
    <form method="post" style="background-color: #fdfdfd; padding: 25px; border-radius: 12px; display: inline-block; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
        
        <input type="text" name="username" placeholder="Enter Your User Name" required 
               style="padding: 10px 15px; font-size: 15px; border: 1.5px solid #dcdde1; border-radius: 6px; margin-right: 10px; width: 220px; outline: none;">
        
        <select name="style" required 
                style="padding: 10px; font-size: 15px; border: 1.5px solid #dcdde1; border-radius: 6px; margin-right: 10px; cursor: pointer; outline: none; background-color: white;">
            <option value="initial">Initial</option>
            <option value="toon-head">Toon Head</option>
            <option value="adventurer">Adventurer</option>
            <option value="big-smile">Big Smile</option>
            <option value="avataaars">Avataaars</option>
            <option value="croodles">Croodles</option>
            <option value="initial-face">Initial Face</option>
        </select>
        
        <button type="submit" name="submit" 
                style="padding: 10px 20px; font-size: 15px; background-color: #4834d4; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; transition: 0.2s;">
            Submit
        </button>
    </form>

<?php

function getAvtr ( $style ,  $name) {
    $avtr = "https://api.dicebear.com/10.x/{$style}/svg?seed={$name}";

    echo '<br><img src="' . $avtr . '" style="width: 200px; height: 200px;"> ';
}

if (isset($_POST['username']) && isset($_POST['style'])) {
    
    $inputName = $_POST['username'];
    $inputStyle = $_POST['style'];
    
    getAvtr($inputStyle, $inputName);
}










