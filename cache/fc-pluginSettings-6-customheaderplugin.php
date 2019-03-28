<?php return array (
  'content' => '<script type="text/javascript">
window.onload = function() {
            insertMenuItem();
            function insertMenuItem(){
               var item = document.createElement("li");
               var mainLink = document.createElement("a");
               var itemContent = document.createTextNode("Series monográficas");
               var subList = document.createElement("ul");
               var itemSubListI = document.createElement("li"); 
               var itemSubListII = document.createElement("li");
               var subLinkI = document.createElement("a");
               var subLinkII = document.createElement("a");
               var subContentI = document.createTextNode("La trama de los objetos");
               var subContentII = document.createTextNode("L\'Hipogeu");
               mainLink.setAttribute("href", "#");
               mainLink.setAttribute("data-toggle","dropdown");
               mainLink.setAttribute("aria-haspopup","true");
               mainLink.setAttribute("aria-expanded","false");
               subList.setAttribute("class", "dropdown-menu");
               subLinkI.setAttribute("href","https://www.unebook.es/es/ebook/la-trama-de-los-objetos_E0002579448");
               subLinkI.setAttribute("target","_blank")
               subLinkII.setAttribute("href","https://www.unebook.es/es/ebook/l-hipogeu-xxi-de-la-necropolis-de-calescoves_E0002647522");
               subLinkII.setAttribute("target","_blank")
               subLinkI.appendChild(subContentI);
               itemSubListI.appendChild(subLinkI);
               subLinkII.appendChild(subContentII);
               itemSubListII.appendChild(subLinkII);
               subList.appendChild(itemSubListI);
               subList.appendChild(itemSubListII);

               mainLink.appendChild(itemContent);
               item.appendChild(mainLink);
               item.appendChild(subList);
               document.getElementById(\'navigationPrimary\').appendChild(item);
              
            };
        }
</script>',
  'enabled' => true,
); ?>