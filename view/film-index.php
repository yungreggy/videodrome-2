{{ include('header.php', {title: 'Film List'}) }}

<body>
    <main> 
  
<section id="film-details">
<h1>Films</h1>
       

        <div class="film-grid">
            {% for film in films %}
            <div class="film-card">
                <a href="{{ path }}film/show/{{ film.id }}">
                    <img src="{{ film.poster_url }}" alt="Poster du film" class="film-poster">
                </a>
                <div class="film-info">
                    <h3 class="film-title">{{ film.titre }}</h3>
                </div>
              
            </div>
            {% else %}
                <p>Aucun film trouvé.</p>
            {% endfor %}

        <a href="{{ path }}film/create" class="btn">Ajouter</a>
     
    </div>
   
    </main>
</body>
</html>
