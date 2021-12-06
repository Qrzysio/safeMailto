# safeMailto

`safe_mailto()` taken from [CodeIgniter 4](https://github.com/codeigniter4/CodeIgniter4).


# Usage

### First parameter only

`<?php echo safe_mailto("contact@domain.com"); ?>`

Result:

```
<script>var l=new Array();l[0]='>';l[1]='a';l[2]='/';l[3]='<';l[4]='|109';l[5]='|111';l[6]='|99';l[7]='|46';l[8]='|110';l[9]='|105';l[10]='|97';l[11]='|109';l[12]='|111';l[13]='|100';l[14]='|64';l[15]='|116';l[16]='|99';l[17]='|97';l[18]='|116';l[19]='|110';l[20]='|111';l[21]='|99';l[22]='>';l[23]='"';l[24]='|109';l[25]='|111';l[26]='|99';l[27]='|46';l[28]='|110';l[29]='|105';l[30]='|97';l[31]='|109';l[32]='|111';l[33]='|100';l[34]='|64';l[35]='|116';l[36]='|99';l[37]='|97';l[38]='|116';l[39]='|110';l[40]='|111';l[41]='|99';l[42]=':';l[43]='o';l[44]='t';l[45]='l';l[46]='i';l[47]='a';l[48]='m';l[49]='"';l[50]='=';l[51]='f';l[52]='e';l[53]='r';l[54]='h';l[55]=' ';l[56]='a';l[57]='<';for (var i = l.length-1; i >= 0; i=i-1) {if (l[i].substring(0, 1) === '|') document.write("&#"+unescape(l[i].substring(1))+";");else document.write(unescape(l[i]));}</script>
```

HTML output: `<a href="mailto:contact@domain.com">contact@domain.com</a>`

### Second parameter


`<?php echo safe_mailto("contact@domain.com", "Contact us"); ?>`

Result:

```
<script>var l=new Array();l[0]='>';l[1]='a';l[2]='/';l[3]='<';l[4]='|115';l[5]='|117';l[6]='|32';l[7]='|116';l[8]='|99';l[9]='|97';l[10]='|116';l[11]='|110';l[12]='|111';l[13]='|67';l[14]='>';l[15]='"';l[16]='|109';l[17]='|111';l[18]='|99';l[19]='|46';l[20]='|110';l[21]='|105';l[22]='|97';l[23]='|109';l[24]='|111';l[25]='|100';l[26]='|64';l[27]='|116';l[28]='|99';l[29]='|97';l[30]='|116';l[31]='|110';l[32]='|111';l[33]='|99';l[34]=':';l[35]='o';l[36]='t';l[37]='l';l[38]='i';l[39]='a';l[40]='m';l[41]='"';l[42]='=';l[43]='f';l[44]='e';l[45]='r';l[46]='h';l[47]=' ';l[48]='a';l[49]='<';for (var i = l.length-1; i >= 0; i=i-1) {if (l[i].substring(0, 1) === '|') document.write("&#"+unescape(l[i].substring(1))+";");else document.write(unescape(l[i]));}</script>
```

HTML output: `<a href="mailto:contact@domain.com">Contact us</a>`

### Third parameter is an array


`<?php echo safe_mailto("contact@domain.com", "Contact us", ["class" => "text-danger", "data-target" => "#lightbox"]); ?>`

Result:

```
<script>var l=new Array();l[0]='>';l[1]='a';l[2]='/';l[3]='<';l[4]='|115';l[5]='|117';l[6]='|32';l[7]='|116';l[8]='|99';l[9]='|97';l[10]='|116';l[11]='|110';l[12]='|111';l[13]='|67';l[14]='>';l[15]='"';l[16]='|120';l[17]='|111';l[18]='|98';l[19]='|116';l[20]='|104';l[21]='|103';l[22]='|105';l[23]='|108';l[24]='|35';l[25]=' data-target="';l[26]='"';l[27]='|114';l[28]='|101';l[29]='|103';l[30]='|110';l[31]='|97';l[32]='|100';l[33]='|45';l[34]='|116';l[35]='|120';l[36]='|101';l[37]='|116';l[38]=' class="';l[39]='"';l[40]='|109';l[41]='|111';l[42]='|99';l[43]='|46';l[44]='|110';l[45]='|105';l[46]='|97';l[47]='|109';l[48]='|111';l[49]='|100';l[50]='|64';l[51]='|116';l[52]='|99';l[53]='|97';l[54]='|116';l[55]='|110';l[56]='|111';l[57]='|99';l[58]=':';l[59]='o';l[60]='t';l[61]='l';l[62]='i';l[63]='a';l[64]='m';l[65]='"';l[66]='=';l[67]='f';l[68]='e';l[69]='r';l[70]='h';l[71]=' ';l[72]='a';l[73]='<';for (var i = l.length-1; i >= 0; i=i-1) {if (l[i].substring(0, 1) === '|') document.write("&#"+unescape(l[i].substring(1))+";");else document.write(unescape(l[i]));}</script>
```

HTML output: `<a href="mailto:contact@domain.com" class="text-danger" data-target="#lightbox">Contact us</a>`


### Third parameter is a string

`<?php echo safe_mailto("contact@domain.com", "Contact us", 'style="font-size:2em;"'); ?>`

Result:

```
<script>var l=new Array();l[0]='>';l[1]='a';l[2]='/';l[3]='<';l[4]='|115';l[5]='|117';l[6]='|32';l[7]='|116';l[8]='|99';l[9]='|97';l[10]='|116';l[11]='|110';l[12]='|111';l[13]='|67';l[14]='>';l[15]='"';l[16]=';';l[17]='m';l[18]='e';l[19]='2';l[20]=':';l[21]='e';l[22]='z';l[23]='i';l[24]='s';l[25]='-';l[26]='t';l[27]='n';l[28]='o';l[29]='f';l[30]='"';l[31]='=';l[32]='e';l[33]='l';l[34]='y';l[35]='t';l[36]='s';l[37]='"';l[38]='|109';l[39]='|111';l[40]='|99';l[41]='|46';l[42]='|110';l[43]='|105';l[44]='|97';l[45]='|109';l[46]='|111';l[47]='|100';l[48]='|64';l[49]='|116';l[50]='|99';l[51]='|97';l[52]='|116';l[53]='|110';l[54]='|111';l[55]='|99';l[56]=':';l[57]='o';l[58]='t';l[59]='l';l[60]='i';l[61]='a';l[62]='m';l[63]='"';l[64]='=';l[65]='f';l[66]='e';l[67]='r';l[68]='h';l[69]=' ';l[70]='a';l[71]='<';for (var i = l.length-1; i >= 0; i=i-1) {if (l[i].substring(0, 1) === '|') document.write("&#"+unescape(l[i].substring(1))+";");else document.write(unescape(l[i]));}</script>
```

HTML output: `<a href="mailto:contact@domain.com" style="font-size:2em;">Contact us</a>`
