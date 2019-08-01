
//! Hamburger menu

(function() {

	var hamburger = {
		navToggle: document.querySelector('.nav-toggle'),
		nav: document.querySelector('nav'),

		doToggle: function(e) {
			e.preventDefault();
			this.navToggle.classList.toggle('expanded');
			this.nav.classList.toggle('expanded');
		}
	};

	hamburger.navToggle.addEventListener('click', function(e) { hamburger.doToggle(e); });

}());



//! Light & Dark Mode 

var checkbox = document.querySelector('input[name=mode]');
 
        checkbox.addEventListener('change', function() {
            if(this.checked) {
                trans();
                document.documentElement.setAttribute('data-theme', 'dartheme');
            
            } else {
                trans();
                document.documentElement.setAttribute('data-theme', 'lighttheme');
          
            }
        })
 
        let trans = () => {
            document.documentElement.classList.add('transition');
            window.setTimeout(() => {
                document.documentElement.classList.remove('transition');
            }, 1000)
        }

// Set the theme for the actual time, day or night
var date = new Date();
var hours = date.getHours();
// var hours = 16;
// console.log(hours);

function themeTime() {
  if ((hours >= 0 && hours <7) || (hours >= 21)) {
    document.documentElement.setAttribute('data-theme', 'dartheme');
    document.getElementById("switch").setAttribute("checked", true);
  } 
  }

  themeTime();


  
// Menu on

function menuOn() {
    if (window.innerWidth > 992) {
        document.getElementById("logo-nav-bar").style.display = "block";
        document.getElementById("nav-desktop").style.display = "flex";
    } else {
        document.getElementById("hamburger").style.display = "block";
    }
}


//! Back top button

document.addEventListener('DOMContentLoaded', function () {
    let gototop = document.querySelector('.gototop');
    let body = document.documentElement;
  
    window.addEventListener('scroll', check);
  
    function check() {
        pageYOffset >= 500 && gototop.classList.add('visible');
        pageYOffset < 500 && gototop.classList.remove('visible');
    }
  
    let circ = timeFraction =>
        1 - Math.sin(Math.acos(timeFraction > 1 ? timeFraction = 1 : timeFraction));
  
    let makeEaseOut = timing => timeFraction => 1 - timing(1 - timeFraction);
    let gogototopEaseOut = makeEaseOut(circ);
  });
  
  function animate(options) {
    let start = performance.now();
  
    requestAnimationFrame(function animate(time) {
        let timeFraction = (time - start) / options.duration;
        timeFraction > 1 && (timeFraction = 1);
  
        let progress = options.timing(timeFraction)
  
        options.draw(progress);
        timeFraction < 1 && requestAnimationFrame(animate);
    });
  }


//! Active links


if (window.location.href == "https://onejo.eu/about/") {
    document.getElementById("about-menu").setAttribute("class","active");
    document.getElementById("about-menu-desktop").setAttribute("class","active");
} else if (window.location.href == "https://onejo.eu/") {
    document.getElementById("home-menu").setAttribute("class","active");
    document.getElementById("home-menu-desktop").setAttribute("class","active");
} else if (window.location.href == "https://onejo.eu/projects/") {
    document.getElementById("projects-menu").setAttribute("class","active");
    document.getElementById("projects-menu-desktop").setAttribute("class","active");
} else if (window.location.href == "https://onejo.eu/contact/") {
    document.getElementById("contact-menu").setAttribute("class","active");
    document.getElementById("contact-menu-desktop").setAttribute("class","active");
}

//! Parallax

var image = document.getElementsByClassName('image');
new simpleParallax(image, {
    scale: 1.5,
});

// delay: .6,
// transition: 'cubic-bezier(0,0,0,1)'







