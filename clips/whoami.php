<?php 
 echo 'executing the command';
 echo '<br>';  
 //exec('whoami 2>&1',$output) ;
 //print_r($output);
 
 //exec(' ps -ef 2>&1',$output) ;
 //print_r($output);

$cmd = 'set';
echo "<pre>".shell_exec($cmd)."</pre>" /home4/slimpy01/immigrantadventure.com/execlog;


 exec('/home4/slimpy01/immigrantadventure.com/clips/cc-core/system/bin/ffmpeg-64-bit/ffmpeg -i /home4/slimpy01/immigrantadventure.com/clips/cc-content/uploads/temp/BE5L6H1370vmflIAHdGw.mov -vcodec libx264 -vf "scale=min(640\,iw):trunc(ow/a/2)*2" -vb 800k -acodec aac -ab 96k -ar 44100 -f mp4 -threads 1 /home4/slimpy01/immigrantadventure.com/clips/cc-content/uploads/h264/BE5L6H1370vmflIAHdGw_temp.mp4 >> /home4/slimpy01/immigrantadventure.com/clips/cc-core/logs/BE5L6H1370vmflIAHdGw.log 2>&1 >> /home4/slimpy01/immigrantadventure.com/execlog & ',$output) ;
 print_r($output);


?>
