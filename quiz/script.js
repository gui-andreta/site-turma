console.clear()
var url = '#' // <-- place shop now URL here 
var questions = [
  one= {
    name:'Escolha uma área:',
    answers:['Comunicação','Design','Html/css','PHP/ java'],
    img:'https://imgur.com/4bSC8OB.png',
  },
    
  two= {
    name:"Você prefere atividades <br>que envolvam:",
    answers:['Pesquisa','Criação','Planejamento','Estruturação'],
    img:'https://imgur.com/7uGMR6C.png',
      
  },
  three= {
    name:'Qual característica mais<br> se assemelha a você:',
    answers:['Sou organizado(a)','Sou imaginativo(a)','Sou muito determinado(a) ','Presto atenção a todos os detalhes'],
    img:'https://imgur.com/kV06L61.png',
      
  },
  four= {
    name:'Admiro pessoas:',
    answers:['Práticas, com iniciativa e que sabem tomar decisões rápidas','Racionais, organizadas e que sabem lidar com a tecnologia','Ousadas, criativas e sensíveis','Que respeitam as pessoas e valorizam a justiça'],
    img:'https://imgur.com/fdf0Y2P.png',

  },
  five= {
    name:'Quando penso numa profissão, <br>o mais importante para mim é:',
    answers:['Trabalhar em algo que esteja em evidência no mercado. ','Fazer algo que gosto. ','Ser muito bem-sucedido financeiramente.','Adquirir novas habilidades.'],
    img:'https://imgur.com/UeAXEJL.png',
  },
    
    six= {
    name:'O emprego ideal é aquele no<br> qual: ',
    answers:['Possui desafios','Ensina algo novo a cada dia','Possui atividades manuais','Contribui com a sociedade'],
    img:'https://imgur.com/o7fmLxc.png',
  },
    
    seven= {
    name:'Diante de um problema:',
    answers:['Relaxo e deixo as coisas acontecerem naturalmente','Eu me concentro no problema e busco solucioná-lo da melhor maneira possível','Busco a ajuda das pessoas','Planejo os detalhes para resolver a situação sem a influência de outras pessoas'],
    img:'https://imgur.com/eGYbxDr.png',
  },
    
    eight= {
    name:'Acredito que serei um profissional<br> feliz quando:',
    answers:['Tiver o meu nome reconhecido no mercado de trabalho ','Ensinar ou aconselhar as pessoas, conseguindo melhorar a vida delas','Tiver um bom salário e estabilidade no emprego','For responsável por um grande projeto e ser valorizado por isso '],
    img:'https://imgur.com/Ut9N0zX.png',
  },
    
    nine= {
    name:'Quando faz um trabalho em<br> grupo, você é aquele(a) que:',
    answers:['Vai direto ao ponto ','Conduz o grupo a ir em determinada direção ','Analisa bem o que tem que ser feito','Quer fazer uma apresentação surpreendente'],
    img:'https://imgur.com/Cl3RNFL.png',
  },
    
    ten= {
    name:'Atividades que descrevem o que gosto de fazer:',
    answers:['Imaginar e projetar um produto ','Adquirir novos conhecimentos ','Fazer trabalhos que exigem resultados precisos','Desenvolver atividades com foco em resultados','Resolver problemas técnicos ', 'Interagir com as pessoas', 'Tomar decisões', 'Prestar atencao aos detalhes'],
    img:'https://imgur.com/c83SIxA.png',
  },
]

var possible_results = [
			{
       	name: " Você Tirou Gabriel",				
				//BITS FOR THE RESULTS PANEL:
				desc: "Bold, beautiful and brilliant - you're an elephant!<br> You're intelligent and powerful. Your friends love you and whilst no-one wants to mess with you,  everyone agrees - you are great! <br> In the wild there are only 600,000 African elephants and it is officially classed as vulnerable.",
				img: "https://imgur.com/Kw2zwS5.png ",
			},{
      	name: " Você tirou Inácia",				
				//BITS FOR THE RESULTS PANEL:
				desc: "Sometimes described as a king you are magnificent and regal - just like the lion!<br> You're sociable and would spend all day lounging around in the sun if you could!<br>In the wild, lions are powerful and majestic, but they’re incredibly vulnerable to loss of habitat and conﬂict with people.",
				img: "https://imgur.com/bqUHshx.png",
			},{
				name: " Você tirou Vanessa",      
				//BITS FOR THE RESULTS PANEL:
				desc: "Cute, cold and a fan of the water - you're an Adélie penguin.<br> You might be quiet and calm (and possibly described as small) but you are elegant, loyal and - of course - a brilliant swimmer! <br>In the wild the Adélie penguin is threatened by the effects of climate change.",
				img: "https://imgur.com/dFUSzLh.png ",
			},{
                
				name: "Você tirou Hiago",	
        //BITS FOR THE RESULTS PANEL:
				desc: "What else could you be? You are - of course - the gorgeous Amur leopard!<br> You have an amazing sense of style and are rarely seen out and about before the sun sets.<br>In the wild, habitat destruction, degradation and poaching of Amur leopards have made this amazing cat critically endangered.",
				img: "https://imgur.com/oGpUbTE.png ",
                
			},{
				name: " Você tirou Thalles",	      
				//BITS FOR THE RESULTS PANEL:
				desc: "With a great sense of style and stunning features, you're a jaguar.<br> You have a great - if sometimes 'unique' - fashion sense and are always on the go. People need to be wary though... you have a powerful bite!<br> In the wild jaguars have been virtually wiped out from most of their northern range and are officially near threatened.",
				img: "https://imgur.com/n45Taxx.png ",
                
			} ,{
				name: " Você tirou Leonardo",	      
				//BITS FOR THE RESULTS PANEL:
				desc: "With a great sense of style and stunning features, you're a jaguar.<br> You have a great - if sometimes 'unique' - fashion sense and are always on the go. People need to be wary though... you have a powerful bite!<br> In the wild jaguars have been virtually wiped out from most of their northern range and are officially near threatened.",
				img: "https://imgur.com/r4j8dld.png ",
                
			} ,{
				name: " Você tirou Guilherme",	      
				//BITS FOR THE RESULTS PANEL:
				desc: "With a great sense of style and stunning features, you're a jaguar.<br> You have a great - if sometimes 'unique' - fashion sense and are always on the go. People need to be wary though... you have a powerful bite!<br> In the wild jaguars have been virtually wiped out from most of their northern range and are officially near threatened.",
				img: " https://imgur.com/AjGsdMp.png ",
			}
		]

function startQuiz(){
   document.querySelector('#quizBox').innerHTML = "<div id='quiz-intro' class='quiz-slide slide-on'>    <div class='quiz-content'>      <h1>Qual aluno do Curso <br>Programador Web<br> você é?</h1>      <a class='nextbutton'>Jogar</a>    </div>  </div>  <div id='quiz-q1' class='quiz-slide'></div>  <div id='quiz-q2' class='quiz-slide'></div>  <div id='quiz-q3' class='quiz-slide'></div>  <div id='quiz-q4' class='quiz-slide'></div>  <div id='quiz-q5' class='quiz-slide'></div>  <div id='quiz-q6' class='quiz-slide'></div>  <div id='quiz-q7' class='quiz-slide'></div>  <div id='quiz-q8' class='quiz-slide'></div>  <div id='quiz-q9' class='quiz-slide'></div>  <div id='quiz-q10' class='quiz-slide'></div>  <div id='quiz-result' class='quiz-slide'>    <div class='quiz-content'>      <img src='' />      <h1></h1>      <p></p>       <a id='pgaluno'>Página do aluno</a> <a id='retake'>Refazer o Quiz</a>    </div>  </div>  "
  
  var pgaluno = document.querySelector('#pgaluno')
  pgaluno.href = ''
  

  
  for(var prop in questions) {
    var i = questions.indexOf(questions[prop]) + 1
    var div = document.getElementById('quiz-q'+[i])
    div.style.backgroundImage = 'url('+questions[prop].img+')'
    var c = document.createElement('div')
    c.className = 'quiz-content'
    var h = document.createElement('h3')
    h.innerHTML = questions[prop].name.toLocaleString()
    div.appendChild(c).append(h)
    var u = document.createElement('ul')
    div.appendChild(c).append(h,u)
    var num = 1
    questions[prop].answers.forEach(function(a){    
      var l = document.createElement('li')
      l.className = 'answer'
      l.innerHTML = a.toLocaleString()
      l.setAttribute('data-cost',num)
      num++
      div.getElementsByTagName('ul')[0].appendChild(l)
    })
    var l = document.createElement('li')
    l.innerHTML = "<div id='q-count'><span>"+i+"</span> / 10</div><div class='nxtbutton'>Próximo »</div>"
    if(i == 10) {
      l.innerHTML = "<div id='q-count'><span>"+i+"</span> / 10</div><div class='last-nxtbutton'>Próximo »</div>"
    }
    div.getElementsByTagName('ul')[0].appendChild(l)
  }

  var nb = document.querySelectorAll('.nextbutton')
  nb.forEach(function(elm) {
    elm.addEventListener('click', function() {
      var s = elm.parentElement.parentElement
      s.className = 'quiz-slide slide-off'    
      s.nextElementSibling.classList.add('slide-on')
      setTimeout(function(){
        s.classList.remove('slide-off')
      },1000)
    })  
  })

  var a = document.querySelectorAll('.answer')
  a.forEach(function(elm){
    elm.addEventListener('click', function(){
      if(elm.parentElement.querySelector('.a-clicked')){
        elm.parentElement.querySelector('.a-clicked').classList.remove('a-clicked')
      }
      elm.classList.add('a-clicked')
      if(elm.parentElement.querySelector('.nxtbutton')){
        elm.parentElement.querySelector('.nxtbutton').style.display = 'block'
      } else {
        elm.parentElement.querySelector('.last-nxtbutton').style.display = 'block'
      }
    })
  })

  var nx = document.querySelectorAll('.quiz-slide div ul li .nxtbutton')
  nx.forEach(function(elm) {
    elm.addEventListener('click', function() {
      var s = elm.parentElement.parentElement.parentElement.parentElement
      s.className = 'quiz-slide slide-off'    
      s.nextElementSibling.classList.add('slide-on')
      setTimeout(function(){
        s.classList.remove('slide-off')
      },1000)
    })  
  })

  var score = -1
  var btn = document.querySelector('.last-nxtbutton')
  btn.addEventListener('click', function() {
    var a = document.querySelectorAll('.a-clicked')
    a.forEach(function(elm){
      var num = parseInt(elm.getAttribute('data-cost'))
      score = score + num
      console.log(score)
    })

    var res = document.querySelector('#quiz-result')
    var n = Math.floor(score/10)
    res.getElementsByTagName('h1')[0].innerHTML = possible_results[n].name
    res.getElementsByTagName('p')[0].innerHTML = possible_results[n].desc
    res.getElementsByTagName('img')[0].src = possible_results[n].img

    var s = btn.parentElement.parentElement.parentElement.parentElement
    s.className = 'quiz-slide slide-off'    
    s.nextElementSibling.classList.add('slide-on')
    setTimeout(function(){
      s.classList.remove('slide-off')
    },1000)
  })
  
  document.querySelector('#retake').addEventListener('click', startQuiz)
}

startQuiz()