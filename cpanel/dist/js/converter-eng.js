// Función modulo, regresa el residuo de una división 
function mod(dividendo , divisor) 
{ 
  resDiv = dividendo / divisor ;  
  
  parteEnt = Math.floor(resDiv);            // Obtiene la parte Entera de resDiv 
  
  parteFrac = resDiv - parteEnt ;      // Obtiene la parte Fraccionaria de la división
  
  modulo = Math.round(parteFrac * divisor);  // Regresa la parte fraccionaria * la división (modulo) 
  return modulo; 
} // Fin de función mod

// Función ObtenerParteEntDiv, regresa la parte entera de una división
function ObtenerParteEntDiv(dividendo , divisor) 
{ 
  resDiv = dividendo / divisor ;  
  parteEntDiv = Math.floor(resDiv); 
  return parteEntDiv; 
} // Fin de función ObtenerParteEntDiv

// function fraction_part, regresa la parte Fraccionaria de una cantidad
function fraction_part(dividendo , divisor) 
{ 
  resDiv = dividendo / divisor ;  
  f_part = Math.floor(resDiv); 
  return f_part; 
} // Fin de función fraction_part


// function string_literal conversion is the core of this program 
// converts numbers to spanish strings, handling the general special 
// cases in spanish language. 
function string_literal_conversion2(number) 
{   
   // first, divide your number in hundreds, tens and units, cascadig 
   // trough subsequent divisions, using the modulus of each division 
   // for the next. 

   centenas2 = ObtenerParteEntDiv(number, 100); 
   
   number = mod(number, 100); 

   decenas = ObtenerParteEntDiv(number, 10); 
   number = mod(number, 10); 

   unidades = ObtenerParteEntDiv(number, 1); 
   number = mod(number, 1);  
   string_hundreds2="";
   string_tens2="";
   string_units2="";
   // cascade trough hundreds. This will convert the hundreds part to 
   // their corresponding string in spanish.
   if(centenas2 == 1){
      string_hundreds2 = "one hundred ";
   } 
   
   
   if(centenas2 == 2){
      string_hundreds2 = "two hundred ";
   }
    
   if(centenas2 == 3){
      string_hundreds2 = "three hundred ";
   } 
   
   if(centenas2 == 4){
      string_hundreds2 = "four hundred ";
   } 
   
   if(centenas2 == 5){
      string_hundreds2 = "five hundred ";
   } 
   
   if(centenas2 == 6){
      string_hundreds2 = "six hundred ";
   } 
   
   if(centenas2 == 7){
      string_hundreds2 = "seven hundred ";
   } 
   
   if(centenas2 == 8){
      string_hundreds2 = "eight hundred ";
   } 
   
   if(centenas2 == 9){
      string_hundreds2 = "nine hundred ";
   } 
   
 // end switch hundreds 

   // casgade trough tens. This will convert the tens part to corresponding 
   // strings in spanish. Note, however that the strings between 11 and 19 
   // are all special cases. Also 21-29 is a special case in spanish. 
   if(decenas == 1){
      //Special case, depends on units for each conversion
      if(unidades == 1){
         string_tens2 = "eleven";
      }
      
      if(unidades == 2){
         string_tens2 = "twelve";
      }
      
      if(unidades == 3){
         string_tens2 = "thirteen";
      }
      
      if(unidades == 4){
         string_tens2 = "fourteen";
      }
      
      if(unidades == 5){
         string_tens2 = "fiveteen";
      }
      
      if(unidades == 6){
         string_tens2 = "sixteen";
      }
      
      if(unidades == 7){
         string_tens2 = "seventeen";
      }
      
      if(unidades == 8){
         string_tens2 = "eighteen";
      }
      
      if(unidades == 9){
         string_tens2 = "nineteen";
      }
   } 
   //alert("string_tens2 ="+string_tens2);
   
   if(decenas == 2){
      string_tens2 = "twenty";
   }
   if(decenas == 3){
      string_tens2 = "thirty";
   }
   if(decenas == 4){
      string_tens2 = "forty";
   }
   if(decenas == 5){
      string_tens2 = "fifty";
   }
   if(decenas == 6){
      string_tens2 = "sixty";
   }
   if(decenas == 7){
      string_tens2 = "seventy";
   }
   if(decenas == 8){
      string_tens2 = "eighty";
   }
   if(decenas == 9){
      string_tens2 = "ninety";
   }
   
    // Fin de swicth decenas


   // cascades trough units, This will convert the units part to corresponding 
   // strings in spanish. Note however that a check is being made to see wether 
   // the special cases 11-19 were used. In that case, the whole conversion of 
   // individual units is ignored since it was already made in the tens cascade. 

   if (decenas == 1) 
   { 
      string_units2="";  // empties the units check, since it has alredy been handled on the tens switch 
   } 
   else 
   { 
      if(unidades == 1){
         string_units2 = "one";
      }
      if(unidades == 2){
         string_units2 = "two";
      }
      if(unidades == 3){
         string_units2 = "three";
      }
      if(unidades == 4){
         string_units2 = "four";
      }
      if(unidades == 5){
         string_units2 = "five";
      }
      if(unidades == 6){
         string_units2 = "six";
      }
      if(unidades == 7){
         string_units2 = "seven";
      }
      if(unidades == 8){
         string_units2 = "eight";
      }
      if(unidades == 9){
         string_units2 = "nine";
      }
       // end switch units 
   } // end if-then-else 
   

//final special cases. This conditions will handle the special cases which 
//are not as general as the ones in the cascades. Basically four: 

// when you've got 100, you dont' say 'ciento' you say 'cien' 
// 'ciento' is used only for [101 >= number > 199] 
if (centenas2 == 1 && decenas == 0 && unidades == 0) 
{ 
   string_hundreds2 = "hundred " ; 
}  

// when you've got 10, you don't say any of the 11-19 special 
// cases.. just say 'diez' 
if (decenas == 1 && unidades ==0) 
{ 
   string_tens2 = "ten " ; 
} 

// when you've got 20, you don't say 'veinti', which is used 
// only for [21 >= number > 29] 
if (decenas == 2 && unidades ==0) 
{ 
  string_tens2 = "twenty " ; 
} 

// for numbers >= 30, you don't use a single word such as veintiuno 
// (twenty one), you must add 'y' (and), and use two words. v.gr 31 
// 'treinta y uno' (thirty and one) 
if (decenas >=3 && unidades >=1) 
{ 
   string_tens2 = string_tens2+" and "; 
} 

// this line gathers all the hundreds, tens and units into the final string 
// and returns it as the function value.
final_string = string_hundreds2+string_tens2+string_units2;


return final_string ; 

} //end of function string_literal_conversion2()================================ 

// handle some external special cases. Specially the millions, thousands 
// and hundreds descriptors. Since the same rules apply to all number triads 
// descriptions are handled outside the string conversion function, so it can 
// be re used for each triad. 


function covertirNumLetrasEn(number)
{
   
  //number = number_format (number, 2);
   number1=number;
   //settype (number, "integer");
   cent = number1.split('.');   
   centavos = cent[1];
   numerparchado=cent[0];
   if (centavos == 0 || centavos == undefined){
   centavos = "00";}

   if (number == 0 || number == "") 
   { // if amount = 0, then forget all about conversions, 
      centenas_final_string2=" cero "; // amount is zero (cero). handle it externally, to 
      // function breakdown 
  } 
   else 
   { 
   
     millions  = ObtenerParteEntDiv(number, 1000000); // first, send the millions to the string 
      number = mod(numerparchado, 1000000);           // conversion function 
      
     if (millions != 0)
      {                      
      // This condition handles the plural case 
         if (millions == 1) 
         {              // if only 1, use 'millon' (million). if 
            descriptor= " million ";  // > than 1, use 'millones' (millions) as 
            } 
         else 
         {                           // a descriptor for this triad. 
              descriptor = " million "; 
            } 
      } 
      else 
      {    
         descriptor = " ";                 // if 0 million then use no descriptor. 
      } 
      millions_final_string2 = string_literal_conversion2(millions)+descriptor; 
          
      
      thousands2 = ObtenerParteEntDiv(number, 1000);  // now, send the thousands2 to the string 
        number = mod(number, 1000);            // conversion function. 
      //print "Th:".thousands2;
     if (thousands2 != 1) 
      {                   // This condition eliminates the descriptor 
         thousands_final_string2 =string_literal_conversion2(thousands2) + " thousand "; 
       //  descriptor = " mil ";          // if there are no thousands2 on the amount 
      } 
      if (thousands2 == 1)
      {
         thousands_final_string2 = " one thousand "; 
     }
      if (thousands2 < 1) 
      { 
         thousands_final_string2 = " "; 
      } 
  
      // this will handle numbers between 1 and 999 which 
      // need no descriptor whatsoever. 

     centenas2  = number;                     
      centenas_final_string2 = string_literal_conversion2(centenas2) ; 
      
   } //end if (number ==0) 

   /*if (ereg("un",centenas2_final_string))
   {
     centenas2_final_string = ereg_replace("","o",centenas2_final_string); 
   }*/
   //finally, print the output. 

   /* Concatena los millones, miles y cientos*/
   cad = millions_final_string2+thousands_final_string2+centenas_final_string2; 
   
   /* Convierte la cadena a Mayúsculas*/
   cad = cad.toUpperCase();       

   if (centavos.length>2)
   {   
      if(centavos.substring(2,3)>= 5){
         centavos = centavos.substring(0,1)+(parseInt(centavos.substring(1,2))+1).toString();
      }   else{
        centavos = centavos.substring(0,2);
       }
   }

   /* Concatena a los centavos la cadena "/100" */
   if (centavos.length==1)
   {
      centavos = centavos+"0";
   }
   centavos = centavos+ "/100"; 


   /* Asigna el tipo de moneda, para 1 = PESO, para distinto de 1 = PESOS*/
   if (number == 1)
   {
      moneda = "  ";  
   }
   else
   {
      moneda = "  ";  
   }
   /* Regresa el número en cadena entre paréntesis y con tipo de moneda y la fase M.N.*/
   document.write( cad+moneda+centavos+" USD ");
}