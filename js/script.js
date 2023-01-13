function getByID(_id){return document.getElementById(_id)}

function displaySize(){getByID('tempSize').innerHTML = window.innerWidth + ' x ' + window.innerHeight;}

function showObj(obj)
{
    var r = "";
    
         for (var i in obj)
        {
            r += i + '\t==>\t' + obj[i] + '\n';
        }   
    
    alert(r);
}


function displayMobileMenu()
{    
    if(document.getElementById('mobileMenuContainer').style.display == 'block')
    {
        document.getElementById('mobileMenuContainer').style.display = 'none';
    }
    else
    {
        var m = document.getElementById('mm3-menu');
        
        var links = m.innerHTML.split("\n");
        
        var select = '<option value="">--- Изберете страница ---</option>';
        
        for(var i in links)
        {
            var patt = /<a(.*?)>(.*?)<\/a>/i;
            
            if(patt.test(links[i]))
            {
                var a = links[i].match(/<a(.*?)href="(.*?)"(.*?)>(.*?)<\/a>/i);
                
                select += '<option value="' + a[2] + '">' + a[4] + '</option>';
            }        
        }
        
        select = '<select onchange="window.location=this.value">' + select + '</select>';
        
        document.getElementById('mobileMenuContainer').innerHTML = select;
        
        document.getElementById('mobileMenuContainer').style.display = 'block';        
    }
}
