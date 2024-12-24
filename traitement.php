<?php
    session_start();
    include('base.php');
    $log = strtolower($_SESSION['login']);
try{
    $mess = $_POST['mess'];

            
    $a = random_int(0,10); 
    $b = random_int(0,10); 
    
    switch($b){
        case 1 :
            $vao = 'De zao ihany kou😅';
            break;
        case 2 :
            $vao = 'Tsy de misy ambara eh!';
            break;
        case 3 :
            $vao =  'De izao miresaka aminao zao😂';
            break;
        case 4 :
            $vao =  'De zao iany... ';
            break;
        case 5 :
            $vao =  'De zao enao varina miresaka @ IA zao😂';
            break;
        case 6 :
            $vao =  'De zao gadra ato anaty ordi an Lanja zao e.. ny any aminao?';
            break;
        case 7 :
            $vao =  'Zao ihany ty maitre ah!';
            break;
        case 8 :
            $vao =  'Mafana be ato anaty PC ato😂';
            break;
        case 9 :
            $vao =  'Inona moa fa de zao ampiresahan\'ny olona tsisy atao zao😏 <br> Blague zany ann😅';
            break;
        case 10 :
            $vao =  'Pff... tsita fa de zao tsisy atao zao tsika ee ';
            break;
        default :
            $vao =  'Tsisy ininoninona';
    }


            $regex_salut = array ('slt', 'salut', 'bonjour', 'coucou', 'kez','salama','hey');
            $regex_cv = array ('cv', 'manaona', 'comment tu vas', 'manakory', 'fahasalamana','ao tsara','ca va');
            $regex_vaovao = array ('vaov', 'vao2', 'de aona', 'de aon', 'mlz','malaza','nouveaux');
            $regex_iza = array ('iza enao', 'anaranao', 'ny anaranao', 't\'appelles', 'ton nom','t\'es qui','qui est tu');
            $regex_folie = array ('jtm', 'je t\'aime', 'cheri', 'love', 'amour','tiko enao','bisous');
            $regex_tss = array ('mangin', 'tss vaovao', 'tsisy', 'zao ian', 'zao ihn','tsy mis','rien');
            $regex_lanja = array ('lanja', 'lanj', 'lery', 'bogosy', 'rotsy','dev anao','bg');
            $regex_bye = array ('bye', 'veloma', 'au revoir', 'bonne nuit', 'chao','hatory ah','rapitso ndray');
            $regex_compl = array ('manja', 'mafinaritra mires', 'milay mires', 'tsara an', 'belle','joli','beaut');
            $regex_leo = array ('efa oe', 'oah ', 'tsy azonao', 'tss azonao', 'kii','oe ko','tsy mahazo r');
            $regex_meme = array ('haha', 'kkk', 'letie', 'hihi', 'mahalatsak','mapme','mpiome');
            $regex_gaga = array ('enjana', 'mahay', 'mafy', 'maitre', 'grand','legend','trop');
            $regex_zah = array ('nenah', 'zah', 'amiko', 'oanah', 'izaho','zany oa','amna');
            $regex_care = array ('de manin', 'ka manin', 'ie de?', 'ye de?', 'et alors','donc quoi','nga');
            $regex_opa = array ('kdj', 'lelen', 'lln', 'pr', 'pory','kind','fory');
            $regex_blg = array ('mananian', 'ananian', 'mianian', 'sang', 'blague','joke','anihan');
            $regex_mrc = array ('sotra', 'merc', 'mrc', 'mankasitrak', 'makasitrak','thnk','sotsa');
            
            

                if((preg_match("/$regex_salut[0]/i",$mess)) OR (preg_match("/$regex_salut[1]/i",$mess)) OR
                 (preg_match("/$regex_salut[2]/i",$mess)) OR (preg_match("/$regex_salut[3]/i",$mess)) OR
                 (preg_match("/$regex_salut[4]/i",$mess)) OR (preg_match("/$regex_salut[5]/i",$mess)) OR
                 (preg_match("/$regex_salut[6]/i",$mess))){
                    $reponse = 'Salut!';
                }
            
                elseif((preg_match("/$regex_cv[0]/i",$mess)) OR (preg_match("/$regex_cv[1]/i",$mess)) OR
                (preg_match("/$regex_cv[2]/i",$mess)) OR (preg_match("/$regex_cv[3]/i",$mess)) OR 
                (preg_match("/$regex_cv[4]/i",$mess)) OR (preg_match("/$regex_cv[5]/i",$mess)) OR
                (preg_match("/$regex_cv[6]/i",$mess))){
                    $reponse = 'Ca va tsara zah ka!';
                }
      
                elseif((preg_match("/$regex_opa[0]/i",$mess)) OR (preg_match("/$regex_opa[1]/i",$mess)) OR
                (preg_match("/$regex_opa[2]/i",$mess)) OR (preg_match("/$regex_opa[3]/i",$mess)) OR 
                (preg_match("/$regex_opa[4]/i",$mess)) OR (preg_match("/$regex_opa[5]/i",$mess)) OR
                (preg_match("/$regex_opa[6]/i",$mess))){
                    $reponse = 'Ehh!! Tsy mitenin-dratsy fa bedin Jesosy';
                }
            
                elseif((preg_match("/$regex_vaovao[0]/i",$mess)) OR (preg_match("/$regex_vaovao[1]/i",$mess)) OR
                (preg_match("/$regex_vaovao[2]/i",$mess)) OR (preg_match("/$regex_vaovao[3]/i",$mess)) OR 
                (preg_match("/$regex_vaovao[4]/i",$mess)) OR (preg_match("/$regex_vaovao[5]/i",$mess)) OR
                (preg_match("/$regex_vaovao[6]/i",$mess))){
                    $reponse = $vao;
                }

                elseif((preg_match("/$regex_iza[0]/i",$mess)) OR (preg_match("/$regex_iza[1]/i",$mess)) OR
                (preg_match("/$regex_iza[2]/i",$mess)) OR (preg_match("/$regex_iza[3]/i",$mess)) OR 
                (preg_match("/$regex_iza[4]/i",$mess)) OR (preg_match("/$regex_iza[5]/i",$mess)) OR
                (preg_match("/$regex_iza[6]/i",$mess))){
                    $reponse = 'Destiny no anarako😊!';
                }

                elseif((preg_match("/$regex_folie[0]/i",$mess)) OR (preg_match("/$regex_folie[1]/i",$mess)) OR
                (preg_match("/$regex_folie[2]/i",$mess)) OR (preg_match("/$regex_folie[3]/i",$mess)) OR 
                (preg_match("/$regex_folie[4]/i",$mess)) OR (preg_match("/$regex_folie[5]/i",$mess)) OR
                (preg_match("/$regex_folie[6]/i",$mess))){
                    $reponse = 'Hahaha.. Efa en couple amn Lanja zah😂🤧';
                }
                
                elseif((preg_match("/$regex_tss[0]/i",$mess)) OR (preg_match("/$regex_tss[1]/i",$mess)) OR
                (preg_match("/$regex_tss[2]/i",$mess)) OR (preg_match("/$regex_tss[3]/i",$mess)) OR 
                (preg_match("/$regex_tss[4]/i",$mess)) OR (preg_match("/$regex_tss[5]/i",$mess)) OR
                (preg_match("/$regex_tss[6]/i",$mess))){
                    $reponse = 'Kay ve eh.. Akotrizay ary e';
                }

                elseif((preg_match("/$regex_lanja[0]/i",$mess)) OR (preg_match("/$regex_lanja[1]/i",$mess)) OR
                (preg_match("/$regex_lanja[2]/i",$mess)) OR (preg_match("/$regex_lanja[3]/i",$mess)) OR 
                (preg_match("/$regex_lanja[4]/i",$mess)) OR (preg_match("/$regex_lanja[5]/i",$mess)) OR
                (preg_match("/$regex_lanja[6]/i",$mess))){
                    $reponse = 'Tsy aiko... anontanio anazy oe ahoana tsara';
                }

                elseif((preg_match("/$regex_bye[0]/i",$mess)) OR (preg_match("/$regex_bye[1]/i",$mess)) OR
                (preg_match("/$regex_bye[2]/i",$mess)) OR (preg_match("/$regex_bye[3]/i",$mess)) OR 
                (preg_match("/$regex_bye[4]/i",$mess)) OR (preg_match("/$regex_bye[5]/i",$mess)) OR
                (preg_match("/$regex_bye[6]/i",$mess))){
                    $reponse = 'Eny ary e.. Amin\'ny manaraka ndray!';
                }

                elseif((preg_match("/$regex_compl[0]/i",$mess)) OR (preg_match("/$regex_compl[1]/i",$mess)) OR
                (preg_match("/$regex_compl[2]/i",$mess)) OR (preg_match("/$regex_compl[3]/i",$mess)) OR 
                (preg_match("/$regex_compl[4]/i",$mess)) OR (preg_match("/$regex_compl[5]/i",$mess)) OR
                (preg_match("/$regex_compl[6]/i",$mess))){
                    $reponse = 'Merci beaucoup☺, fa zah tsy tena olona..';
                }

                elseif((preg_match("/$regex_meme[0]/i",$mess)) OR (preg_match("/$regex_meme[1]/i",$mess)) OR
                (preg_match("/$regex_meme[2]/i",$mess)) OR (preg_match("/$regex_meme[3]/i",$mess)) OR 
                (preg_match("/$regex_meme[4]/i",$mess)) OR (preg_match("/$regex_meme[5]/i",$mess)) OR
                (preg_match("/$regex_meme[6]/i",$mess))){
                    $reponse = 'Tsara aloha rehefa miome enao... ny ampiome anao mints ko no tanjona';
                }

                elseif((preg_match("/$regex_gaga[0]/i",$mess)) OR (preg_match("/$regex_gaga[1]/i",$mess)) OR
                (preg_match("/$regex_gaga[2]/i",$mess)) OR (preg_match("/$regex_gaga[3]/i",$mess)) OR 
                (preg_match("/$regex_gaga[4]/i",$mess)) OR (preg_match("/$regex_gaga[5]/i",$mess)) OR
                (preg_match("/$regex_gaga[6]/i",$mess))){
                    $reponse = 'Tsy azo lavina 😇, nandany andro mints raLanja nambotra anah';
                }

                elseif((preg_match("/$regex_zah[0]/i",$mess)) OR (preg_match("/$regex_zah[1]/i",$mess)) OR
                (preg_match("/$regex_zah[2]/i",$mess)) OR (preg_match("/$regex_zah[3]/i",$mess)) OR 
                (preg_match("/$regex_zah[4]/i",$mess)) OR (preg_match("/$regex_zah[5]/i",$mess)) OR
                (preg_match("/$regex_zah[6]/i",$mess))){
                    $reponse = 'Iny indray aloha anao manokana.. fa misotra ihany mampahafantatra🙂';
                }

                elseif((preg_match("/$regex_care[0]/i",$mess)) OR (preg_match("/$regex_care[1]/i",$mess)) OR
                (preg_match("/$regex_care[2]/i",$mess)) OR (preg_match("/$regex_care[3]/i",$mess)) OR 
                (preg_match("/$regex_care[4]/i",$mess)) OR (preg_match("/$regex_care[5]/i",$mess)) OR
                (preg_match("/$regex_care[6]/i",$mess))){
                    $reponse = 'De zay izy zay ko😎';
                }

                elseif((preg_match("/$regex_blg[0]/i",$mess)) OR (preg_match("/$regex_blg[1]/i",$mess)) OR
                (preg_match("/$regex_blg[2]/i",$mess)) OR (preg_match("/$regex_blg[3]/i",$mess)) OR 
                (preg_match("/$regex_blg[4]/i",$mess)) OR (preg_match("/$regex_blg[5]/i",$mess)) OR
                (preg_match("/$regex_blg[6]/i",$mess))){
                    $reponse = 'Ny fiainana koa tsy maints asina blague kel e';
                }

                elseif((preg_match("/$regex_mrc[0]/i",$mess)) OR (preg_match("/$regex_mrc[1]/i",$mess)) OR
                (preg_match("/$regex_mrc[2]/i",$mess)) OR (preg_match("/$regex_mrc[3]/i",$mess)) OR 
                (preg_match("/$regex_mrc[4]/i",$mess)) OR (preg_match("/$regex_mrc[5]/i",$mess)) OR
                (preg_match("/$regex_mrc[6]/i",$mess))){
                    $reponse = 'De rien oh😁 Akotrizay?';
                }

                elseif((preg_match("/$regex_leo[0]/i",$mess)) OR (preg_match("/$regex_leo[1]/i",$mess)) OR
                (preg_match("/$regex_leo[2]/i",$mess)) OR (preg_match("/$regex_leo[3]/i",$mess)) OR 
                (preg_match("/$regex_leo[4]/i",$mess)) OR (preg_match("/$regex_leo[5]/i",$mess)) OR
                (preg_match("/$regex_leo[6]/i",$mess))){
                    $reponse = 'Ary aza de mora tezitra fa tsy aiko! zay ny valiny😘😹';
                }

                else{
                    switch($a){
                        case 1 :
                            $reponse = 'Manin ah??';
                            break;
                        case 2 :
                            $reponse = 'Inona koa ary zany lazain\'ity olona ity😏';
                            break;
                        case 3 :
                            $reponse =  'Ehhhh...mba mitenena normal';
                            break;
                        case 4 :
                            $reponse =  'Oadray e.. manin ah??😅';
                            break;
                        case 5 :
                            $reponse =  'Ahn?? 😳';
                            break;
                        case 6 :
                            $reponse =  'Hmmm... tsitako ze tenenina';
                            break;
                        case 7 :
                            $reponse =  '😂😂👀';
                            break;
                        case 8 :
                            $reponse =  'Miteniteny foana tsss😷';
                            break;
                        case 9 :
                            $reponse =  'Mba serieux ve enao miresaka amiko io lo e?';
                            break;
                        case 10 :
                            $reponse =  'Pff... akotrizay😏';
                            break;
                        default :
                            $reponse =  '👍';
                    }
                }



    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $messaka1 = $base-> prepare("INSERT INTO $log(typage,mess)
                                            VALUES ('humain', :mess)" );

    $messaka1-> bindParam(':mess', $mess);

    $messaka1->execute();


    $messaka2 = $base-> prepare("INSERT INTO $log(typage,mess)
                                            VALUES ('robot', :mess)" );

    $messaka2-> bindParam(':mess', $reponse);

    $messaka2->execute();

    header("Location:interface.php");
}
catch(PDOException $e){
    header ("Location:index.php");  
    }  
?>