<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style type="text/css">
.menubar {
  clear: both;
  border-radius: 8px;
  background: #044a64;
  padding: 0px;
  margin: 0px;
  cell-spacing: 0px;
}    
.toolbar {
  text-align: center;
  line-height: 1.6em;
  margin: 0;
  padding: 0px 8px;
}
.toolbar a { color: white; text-decoration: none; padding: 6px 12px; }
.toolbar a:visited { color: white; }
.toolbar a:hover {
	color: #003333;
	background: white;
}
</style>
</head>

<body>
<h1>LibrarySea</h1>
<table width=100% class="menubar"><tr>
  <td width=100%>
  <div class="toolbar">
    <a href="./home.php">主页</a>
    <a href="../LibrarySea/ProgramLanguage.php">开发语言</a>
    <a href="../LibrarySea/Application.php">应用领域</a>
    <a href="../LibrarySea/UML.php">UML</a>
    <a href="../LibrarySea/SourceCode.php">源码</a>
    <a href="../LibrarySea/Algorithm.php">算法</a>
    <a href="../LibrarySea/DesignPatterns.php">设计模式</a>
    <a href="../LibrarySeaUpdateNews.php">更新</a>
    <a href="../LibrarySea/Links.php">官网链接</a>
    <a href="../LibrarySea/About.php">关于</a>
  </div>
<script>
  gMsg = "Search Library Docs..."
  function entersearch() {
    var q = document.getElementById("q");
    if( q.value == gMsg ) { q.value = "" }
    q.style.color = "black"
    q.style.fontStyle = "normal"
  }
  function leavesearch() {
    var q = document.getElementById("q");
    if( q.value == "" ) { 
      q.value = gMsg
      q.style.color = "#044a64"
      q.style.fontStyle = "italic"
    }
  }
  function hideorshow(btn,obj){
    var x = document.getElementById(obj);
    var b = document.getElementById(btn);
    if( x.style.display!='none' ){
      x.style.display = 'none';
      b.innerHTML='show';
    }else{
      x.style.display = '';
      b.innerHTML='hide';
    }
    return false;
  }
</script>
<td>
    <div style="padding:0 1em 0px 0;white-space:nowrap">
    <form name=f method="GET" action="https://www.sqlite.org/search">
      <input id=q name=q type=text
       onfocus="entersearch()" onblur="leavesearch()" style="width:24ex;padding:1px 1ex; border:solid white 1px; font-size:0.9em ; font-style:italic;color:#044a64;" value="Search Library Docs...">
      <input type=submit value="Go" style="border:solid white 1px;background-color:#044a64;color:white;font-size:0.9em;padding:0 1ex">
    </form>
    </div>
  </table>
<p>&nbsp;</p>

<table border="0" width="100%">
<tr>
  <td valign="top">
<h3>Welcome</h3>
<p>库海本着推动开源，促进开源的宗旨，使开发者能快速了解和使用目前所流行的开源库和开源框架，降低学习成本，提高开发效率，使更多的人使用开源，加入到开源中来</p>
<hr style="color: #044a64" height="2">

<h3>Sponsors</h3>
<p>Ongoing development and maintenance of SQLite is
sponsored in part by <a href="../consortium.html">SQLite Consortium</a>
members, including:</p>

<a name="consortium_members"></a>
<center>
<table border="0" cellpadding="15">


<script language="JavaScript">
  var sponsor = new Array()
  sponsor[0] = '<tr><td align="center"> <a href="https://www.mozilla.com/"> <img src="images/foreignlogos/mozilla.gif" alt="mozilla.com" border="0"> </a></td><td> <a href="https://www.mozilla.com/">Mozilla</a> - Working to preserve  choice and innovation on the internet.</td></tr>'

  sponsor[1] = '<tr><td align="center"> <a href="https://www.bloomberg.com/"> <img src="images/foreignlogos/bloomberg.gif" alt="bloomberg.com" border="0"> </a></td><td> <a href="https://www.bloomberg.com/">Bloomberg</a> -  A world leader in financial-information technology.</td></tr>'

  sponsor[2] = '<tr><td align="center"> <a href="https://www.bentley.com/"> <img src="images/foreignlogos/bentley.gif" alt="bentley.com" border="0"> </a></td><td> <a href="https://www.bentley.com/">Bentley</a> - Comprehensive software  solutions for Sustaining Infrastructure.</td></tr>'

  sponsor[3] = '<tr><td align="center"> <a href="http://www.nds-association.org/"> <img src="images/foreignlogos/nds.png" alt="nds-association.org" border="0"> </a></td><td> <a href="http://www.nds-association.org/">NDS</a> - The leading map standard  for automotive infotainment and autonomous driving.</td></tr>'

  sponsor[4] = '<tr><td align="center"> <a href="https://www.expensify.com/"> <img src="images/foreignlogos/expensify.png" width="225" height="32"  alt="expensify.org" border="0"> </a></td><td> <a href="https://www.expensify.com/">Expensify</a> -  We power the most exciting companies in the world using SQLite. </td></tr>'

  count = 5
  while( count>0 ){
    i = Math.floor(Math.random()*6)
    if( sponsor[i]!=null ){
      document.write(sponsor[i])
      sponsor[i] = null
      count--
    }
  }
</script>


</table>
</center>


</td>
<td width="20"></td><td bgcolor="#044a64" width="1"></td><td width="20"></td>
<td valign="top">
<h3>最近更新</h3>
<h3>
  </p>
</h3></td></tr>
</table>

</body>
</html>
