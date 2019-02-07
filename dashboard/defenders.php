<?php
function defenders() {
    global $rand, $op;
    switch ($rand) {
        case "1":
            echo "Kapkan";
            primary("9×19VSN", "SASG-12 (Shotgun)", "");
            secondary("PMM", "GSh-18");
            gadget("Impact Grenade", "Nitro cell");
            break;
          case "2":
            echo "God";
            primary("9x19VSN", "SASG-12 (Shotgun", "");
            secondary("GSh18", "PMM");
            gadget("barbed wire", "Deployable Shield");
            break;
        case "3":
            echo "Jäger, Erren";
            primary("416-C Carbine", "M870 (Shotgun)", "");
            echo "<br/>secondary: P12";
            gadget("Deployable Shield", "Barbed Wire");
            break;    
        case "4":
            echo "Bandit";
            primary("MP7", "M870 (Shotgun)", "");
            echo "<br/> Secondary weapon: P12";
            gadget("Barbed Wire", "Nitro cell");
            break;    
        case "5":
            echo "Doc";
            primary("SG-CQB (Shotgun)", "MP5", "P90");
            secondary("P9 (Handgun)", "LFP586 (Revolver)");
            gadget("Bulletproof Camera", "Barbed Wire");
            break; 
        case "6":
            echo "Rook";
            primary("SG-CQB (Shotgun)", "MP5", "P90");
            secondary("P9 (Handgun)", "LFP586 (Revolver)");
            gadget("Deployable Shield", "Impact Grenade");
            break;
        case "7":
            echo "Smoke";
            primary("M590A1 (Shotgun)", "FMG-9", "");
            secondary("P226 Mk 25 (Handgun)", "SMG-11");
            gadget("Impact Grenade","Barbed Wire");
            break;
        case "8":
            echo "Mute";
            primary("MP5K", "M590A1 (Shotgun)", "");
            echo "<br/> Secondary weapon: P226 Mk 25(Handgun)";
            gadget("Bulletproof Camera","Nitro Cell");
            break;
        case "9":
            echo "Castle";
            primary("UMP45", "RM1014 (Shotgun)", "");
            secondary("M45 MEUSOC", "5.7 USG");
            gadget("Bulletproof Camera","Impact Grenade");
            break;
        case "10":
            echo "Pulse";
            primary("M1014 (Shotgun)", "UMP45", "");
            secondary("M45 MEUSOC", "5.7 USG");
            gadget("Nitro Cell","Barbed Wire");
            break;
	}
}
?>