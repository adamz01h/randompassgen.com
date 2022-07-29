<!doctype html>
    <html>
    <head>

     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Random Password Generator</title>
     <meta name="description" content="Random Password Generator to create secure passwords that are impossible to crack on your device."> 

     <meta name="keywords" content="Password Generator, Online Password Generator, Random Password Generator, Secure Password Generator, Create Password, Generate Password">

     <link rel="apple-touch-icon" sizes="57x57" href="site_icons/apple-icon-57x57.png">
     <link rel="apple-touch-icon" sizes="60x60" href="site_icons/apple-icon-60x60.png">
     <link rel="apple-touch-icon" sizes="72x72" href="site_icons/apple-icon-72x72.png">
     <link rel="apple-touch-icon" sizes="76x76" href="site_icons/apple-icon-76x76.png">
     <link rel="apple-touch-icon" sizes="114x114" href="site_icons/apple-icon-114x114.png">
     <link rel="apple-touch-icon" sizes="120x120" href="site_icons/apple-icon-120x120.png">
     <link rel="apple-touch-icon" sizes="144x144" href="site_icons/apple-icon-144x144.png">
     <link rel="apple-touch-icon" sizes="152x152" href="site_icons/apple-icon-152x152.png">
     <link rel="apple-touch-icon" sizes="180x180" href="site_icons/apple-icon-180x180.png">
     <link rel="icon" type="image/png" sizes="192x192"  href="site_icons/android-icon-192x192.png">
     <link rel="icon" type="image/png" sizes="32x32" href="site_icons/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="96x96" href="site_icons/favicon-96x96.png">
     <link rel="icon" type="image/png" sizes="16x16" href="site_icons/favicon-16x16.png">
     <link rel="manifest" href="site_icons/manifest.json">
     <meta name="msapplication-TileColor" content="#ffffff">
     <meta name="msapplication-TileImage" content="site_icons/ms-icon-144x144.png">
     <meta name="theme-color" content="#ffffff">

     <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
     <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="/vendor/components/jquery/jquery.min.js"></script>
     <link rel="stylesheet" href="style.css">
     <script language="javascript" type="text/javascript" src="main.js"></script>

 </head>


 <div class="container">
     <div class="row justify-content-center">
         <div class="col-xl-8 col-lg-8 col-md-8">
            <div class="row ">
             <div id="header" class="p-4">
              <div id="Logo"><img class="Logoimg" src="logo.png"
               border="0" alt="Secure Random Password Generator">
           </div>
           <h1 id="LogoText">Random Password Generator</h1>

       </div><!-- header -->
       
   </div>
   <hr class="header">
   <form>

    <div class="row p-1">
      <div class="col-md-4">
          <div class="checkbox_label">Password Length:</div>
      </div>
      <div class="col-md-6">
          <div class="checkbox_value" >
            <select id="pwlen" class="w-100" title="Select the length of your password." onclick="save_settings( false );">
                <optgroup label="Weak">				
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </optgroup>
                <optgroup label="Strong">   	  			   
                  <option selected="selected" value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>		
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                  <option value="60">60</option>
                  <option value="61">61</option>
                  <option value="62">62</option>
                  <option value="63">63</option>
                  <option value="64">64</option>
                  <option value="65">65</option>
                  <option value="66">66</option>
                  <option value="67">67</option>
                  <option value="68">68</option>
                  <option value="69">69</option>
                  <option value="70">70</option>
                  <option value="71">71</option>
                  <option value="72">72</option>
                  <option value="73">73</option>
                  <option value="74">74</option>
                  <option value="75">75</option>
                  <option value="76">76</option>
                  <option value="77">77</option>
                  <option value="78">78</option>
                  <option value="79">79</option>
                  <option value="80">80</option>
                  <option value="81">81</option>
                  <option value="82">82</option>
                  <option value="83">83</option>
                  <option value="84">84</option>
                  <option value="85">85</option>
                  <option value="86">86</option>
                  <option value="87">87</option>
                  <option value="88">88</option>
                  <option value="89">89</option>
                  <option value="90">90</option>
                  <option value="91">91</option>
                  <option value="92">92</option>
                  <option value="93">93</option>
                  <option value="94">94</option>
                  <option value="95">95</option>
                  <option value="96">96</option>
                  <option value="97">97</option>
                  <option value="98">98</option>
                  <option value="99">99</option>
                  <option value="100">100</option>
                  <option value="101">101</option>
                  <option value="102">102</option>
                  <option value="103">103</option>
                  <option value="104">104</option>
                  <option value="105">105</option>
                  <option value="106">106</option>
                  <option value="107">107</option>
                  <option value="108">108</option>
                  <option value="109">109</option>
                  <option value="110">110</option>
                  <option value="111">111</option>
                  <option value="112">112</option>
                  <option value="113">113</option>
                  <option value="114">114</option>
                  <option value="115">115</option>
                  <option value="116">116</option>
                  <option value="117">117</option>
                  <option value="118">118</option>
                  <option value="119">119</option>
                  <option value="120">120</option>
                  <option value="121">121</option>
                  <option value="122">122</option>
                  <option value="123">123</option>
                  <option value="124">124</option>
                  <option value="125">125</option>
                  <option value="126">126</option>
                  <option value="127">127</option>
                  <option value="128">128</option>      		        
              </optgroup>

              <optgroup label="Unbelievable">
                 <option value="256">256</option>	 	  			   	  			   
                 <option value="512">512</option>		   	   		   	   
                 <option value="1024">1024</option>	   	   
                 <option value="2048">2048</option>		   
             </optgroup>			

         </select>
     </div>
     
 </div>
</div>



<div class="row p-1">
    <div class="col-md-4">
      <div class="checkbox_label">Include Symbols:</div>
  </div>
  <div class="col-md-8">
      <div class="checkbox_value"><label><input type="checkbox" name="Symbols" id="Symbols" checked="checked" onclick="save_settings( false );"> ( e.g. @#$% )</label></div>
  </div>
</div>




<div class="row p-1">
    <div class="col-md-4">
      <div class="checkbox_label">Include Numbers:</div>
  </div>
  <div class="col-md-8">
      <div class="checkbox_value"><label><input type="checkbox" name="Numbers" id="Numbers" checked="checked" onclick="save_settings( false );"> ( e.g. 123456 )</label></div>		
  </div>
</div>



<div class="row p-1">
    <div class="col-md-4">
      <div class="checkbox_label">Include Lowercase Characters:</div>
  </div>
  <div class="col-md-8">
      <div class="checkbox_value"><label><input type="checkbox" name="Lowercase" id="Lowercase" onclick="save_settings( false );"> ( e.g. abcdefgh )</label></div>
  </div>
</div>

<div class="row p-1">
    <div class="col-md-4">
      <div class="checkbox_label">Include Uppercase Characters:</div>
  </div>
  <div class="col-md-8">
      <div class="checkbox_value"><label><input type="checkbox" name="Uppercase" id="Uppercase" checked="checked" onclick="save_settings( false );"> ( e.g. ABCDEFGH )</label></div>	
  </div>
</div>
<div class="row p-1">
    <div class="col-md-4">
      <div class="checkbox_label">Exclude Similar Characters:</div>
  </div>
  <div class="col-md-8">
      <div class="checkbox_value"><label><input type="checkbox" name="Nosimilar" id="Nosimilar" checked="checked" onclick="save_settings( false );"> ( e.g. i, l, 1, L, o, 0, O )</label></div>
  </div>
</div>

<div class="row p-1">
    <div class="col-md-4">
      <div class="checkbox_label">Exclude Ambiguous Characters:</div>
  </div>
  <div class="col-md-8">
      <div class="checkbox_value"><label><input type="checkbox" name="NoAmb" id="NoAmb" checked="checked" onclick="save_settings( false );"> ( { } [ ] ( ) / \ ' " ` ~ , ; : . &lt; &gt; )</label></div>
  </div>
</div>
<div class="row p-1">
    <div class="col-md-4">
      <div class="checkbox_label">NATO phonetic alphabet Wordset:</div>
  </div>
  <div class="col-md-8">
      <div class="checkbox_value"><label><input type="checkbox" name="NATO" id="NATO" onclick="save_settings( false );"> (Use NATO word set.)</label></div>			
  </div>
</div>
<div class="row p-1">
 <div class="col-md-4">
  <div class="checkbox_label">Auto-Select:</div>
</div>
<div class="col-md-8">
  <div class="checkbox_value"><label><input type="checkbox" name="AutoSelect" id="AutoSelect" onclick="save_settings( false );"> ( select the password automatically )</label></div>			
</div>
</div>
<div class="row p-1">
    <div class="col-md-4">
      <div class="checkbox_label">Save My Preference:</div>
  </div>
  <div class="col-md-8">
      <div class="checkbox_value"><label><input type="checkbox" name="SaveSettings" id="SaveSettings" onclick="save_settings( true );"> ( save all the settings above for later use )</label></div>
  </div>
</div>


<div class="row p-1">
    <div class="col-md-4 offset-md-4 pb-4 pt-4">
     <div id="sec_btn">
      <span class="btn btn-secondary btn-lg button GenerateBtn w-100" onclick="roll_password();">Generate Password </span>
  </div><!-- sec_btn -->
</div>
</div>
<div class="row p-1">
    <div class="col-md-4 pb-4">
      
      <div class="checkbox_label">Your New Password:</div>
  </div>
  <div class="col-md-6 pb-4">
      <div class="checkbox_value">
       <input name="final_pass" id="final_pass" type="text" value="Your new password will appear here." class="txt_password w-100 form-control" onclick="select_text('final_pass')" ;>
   </div>
</div>
<div class="col-md-2 pb-4">
   <span class="button CopyBtn btn btn-secondary" onclick="copyText();"> Copy </span>
</div>

</div>
<div class="row p-1">
    <div class="col-md-4">

     <div class="Phoneticl"><label>Remember your password:</label></div>
 </div>
 <div class="col-md-8">
     <div class="Phoneticr"><label id="PhoneticPronunciation">Remember your password with the first character of each word in this sentence.</label></div>
 </div>
 
</div>

</div>
</div>
</div>

</form>
</div><!-- middle -->
</div><!-- super middle -->  

</div><!-- container -->


</body> 
<div class="container">
    <div class="row p-1">
        <div class="col-md-12">
           <b>Info:</b>
           <p>
               Save this page for offline use.<br>
               Passwords are created in Javascript right on the device.<br>
               We cannot store any passwords created on this site.<br>
               Code is not obfuscated and can be reviewed easily.<br>
               You can review the code on <a href="https://github.com/adamz01h/randompassgen.com">Github</a>.<br>
               This work is licensed under <a href="https://creativecommons.org/licenses/by-nc/4.0/legalcode">Createive Commons Attribution-NonCommercial 4.0 International</a><br>
           </p>
       </div>         
   </div>
</div>
<div class="container">
    <div class="row p-1 ">
        <div class="col-sm">
            <footer>
                <p>Copyright &copy; <?php echo date('Y')?> <a href="https://randompassgen.com/" title="Password Generator">randompassgen.com</a></p>
                <p>This site was built using <a href="https://getbootstrap.com/">Bootstrap</a> and <a href="https://openjsf.org/">jQuery</a>.</p>

                <p><strong>We do not and cannot store any passwords.</strong></p>
            </footer>
        </div>
    </div>
</div>

</html>