console.log(`
---------------------------------------------------
    Este codigo fue desarrolado por Sr.Wilson-89   
    Email: srwilsom89@gmail.com                    
---------------------------------------------------

╔═══════════════════════╗
║ ╔═╗  ╔╦╦╦╦╗           ║
║ ║╚╬═╗║║║╠╣╠══╦═╦═╗ 8  ║
║ ╠╗║╠╝║║║║║╠╗╚╣║║║║  9 ║
║ ╚═╩╝ ╚══╩╩╩══╩═╩╩╝    ║
╚═══════════════════════╝

## ##   ### ##
##   ##   ##  ##
####      ##  ##
 #####    ## ##
    ###   ## ##
##   ##   ##  ##
 ## ##   #### ##

 ##   ##    ####
 ##   ##     ##
 ##   ##     ##
 ## # ##     ##
 # ### #     ##
  ## ##      ##
 ##   ##    ####

 ####      ## ##
 ##      ##   ##
 ##      ####
 ##       #####
 ##          ###
 ##  ##  ##   ##
### ###   ## ##

## ##   ###  ##
##   ##    ## ##
##   ##   # ## #
##   ##   ## ##
##   ##   ##  ##
##   ##   ##  ##
 ## ##   ###  ##

 ## ##    ## ##
##   ##   #   ##
##   ##  ##   ##
 ## ##    ## ###
##   ##       ##
 #   ##  ##   ##
 ## ##    ## ##

`);

// x=0;
// for (x==0; x<=20; x++){
//     document.write(`<p> Hola rebonica estas mas hermosa que el numero ${x}</p>`)
// }

// x=0;
// for (x==0; x<=20; x++){
//     document.write(`<p> 5 * ${x} = ${x*5} </p>`)
// }



// for (y=2; y<=20; y++){
//     document.write(`<div class="multi">`)
//     for (x=1; x<=10; x++){
//         document.write(`<p> ${y} * ${x} = <span style="text-shadow: blue 2px 2px 2px;">${x*y}</span> </p>`)
//     }
//     document.write(`</div>`)
// }


for (y=2; y<=20; y++){
    document.write(`<div class="multi">`)
    for (x=1; x<=10; x++){
        if((x*y)%2==0){
            document.write(`<p> ${y} * ${x} = <span style="text-shadow: white 2px 2px 2px; color: black;">${x*y}</span> </p>`);
        }else{
            document.write(`<p> ${y} * ${x} = <span style="text-shadow: red 2px 2px 2px;">${x*y}</span> </p>`);
        }
    }
    document.write(`</div>`)
}



