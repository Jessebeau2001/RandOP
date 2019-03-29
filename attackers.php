<?php
function attackers() {            //Functie die na gaat welke attacker er uit de randomizer zal komen
    global $rand, $op;            //maakt de variabelen $rand & $op globaal zodat de functie deze ook kan gebruiken
    switch ($rand) {            //switch statement, wij gebruiken deze i.v.m. elseif omdat het kleiner is op deze schaal
        case "1":                //elk nummer/case heeft een operator aan zich gekopeld, deze 1 dus, geeft dan ook Fuze
            echo "Fuze";        //print de naam van de operator op het scherm
            primary("Ballistic Shield", "LMG - 6P41", "AK-12"); //roept de functie voor de primaire secundaire en de gadgets op
            secondary("PMM", "GSh-18");
            gadget("Breach Charge", "Smoke Grenade");
            break;                //maakt een eind aan de code die bij case[1] hoort
          case "2":                //2e case word hier gecheked en of uitgevoerd dit herhaald zich dus hier hoef geen uitleg bij gegeven te worden
            echo "Glaz";
            echo "<br/> Primary weapon: OTs-03"; //deze operator heeft maar 1 primair wapen dus daarom noemen wij direct het wapen zonder het eerst te randomizer voor efficiëntie
            secondary("GSh18", "PMM");
            gadget("Smoke Grenade", "Claymore");
            break;
        case "3":
            echo "IQ";
            primary("AUG A2", "553 Commando", "G8A1");
            echo "<br/>Secondary weapon: P12";            //deze operator, zoals bij case[2], heeft maar 1 wapen dus we randomizen hem niet
            gadget("Breach Charge", "Frag Grenade");
            break;    
        case "4":
            echo "Blitz";
            echo "<br/> Primary weapon: Flash Shield";
            echo "<br/> Secondary weapon: P12";
            gadget("Smoke Grenade", "Breach Charge");
            break;    
        case "5":
            echo "Twitch";
            primary("F2", "417 - DMR", "SG-CQB - Shotgun");
            secondary("P9 (Handgun)", "LFP586 (Revolver)");
            gadget("Breach Charge", "Claymore");
            break; 
        case "6":
            echo "Montenasj";
            echo "<br/> Primary weapon: Extandable Shield";
            secondary("P9 (Handgun)", "LFP586 (Revolver)");
            gadget("Smoke Grenade", "Stun Grenade");
            break;
        case "7":
            echo "Sledge";
            primary("M590A1 (Shotgun)", "L85A2 (Asslault Rifle)", "");    //hier laten we de 3e (varWp3) leeg, als hij hier toch op zal vallen loopt de functie zichzelf weer
            secondary("P226 Mk 25 (Handgun)", "SMG-11");
            gadget("Frag Grenade","Stun Grenade");
            break;
        case "8":
            echo "Thatcher";
            primary("AR33", "L85A2 (Assault Rifle)", "M590A1 (Shotgun)");
            echo "<br/> Secondary weapon: P226 Mk 25(Handgun)";
            gadget("Claymore","Breach Charge");
            break;
        case "9":
            echo "Ash";
            primary("G36C", "R4-C", "");
            secondary("M45 MEUSOC", "5.7 USG");
            gadget("Breach Charge","Stun Grenade");
            break;
        case "10":
            echo "Thermite";
            primary("M1014 (Shotgun)", "556xi", "");
            secondary("M45 MEUSOC", "5.7 USG");
            gadget("Stun Grenade","Claymore");
            break;
    }
}
?>