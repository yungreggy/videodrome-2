{{ include('header.php', {title: 'Film Show'}) }}
<main>

    <section id="film-details">

        <h1 class="film-titre">
            {{ film.titre | capitalize }}
        </h1>

        {% if film %}
            <div class="film-info">
                {% if film.poster_local %}
                    <img src="./assets/images/{{ film.poster }}" alt="{{ film.titre }} poster" class="film-poster-details">
                {% elseif film.poster_url %}
                    <img src="{{ film.poster_url }}" alt="{{ film.titre }} poster" class="film-poster-details">
                {% else %}
                    <p>Aucun poster disponible</p>
                {% endif %}

                <div class="film-text">
                    <p>
                        <strong>Année:</strong>
                        {{ film.annee_de_sortie }}</p>
                    <p>
                        <strong>Réalisateur:</strong>
                        <a href="{{ path }}realisateur/show/{{ film.realisateur_id }}">{{ film.realisateur_nom }}</a>
                    </p>
                    <p>
                        <strong>Genre:</strong>
                        <a href="{{ path }}genre/show/{{ film.genre }}">{{ film.genre_nom }}</a>
                    </p>
                    <p>
                        <strong>Pays d'origine:</strong>
                        {{ film.pays_d_origine }}</p>
                    <p>
                        <strong>Résumé:</strong>
                        {{ film.resume }}</p>
                </div>
            </div>
            <div class="actions">
                <a href="{{ path }}film/edit/{{ film.id }}" class="btn btn-primary">Modifier le film</a>
                <a href="{{ path }}film/destroy/{{ film.id }}" class="btn btn-danger" onclick="return confirm('Es-tu sûr de vouloir supprimer ce film ?');">Supprimer le film</a>
            </div>
        {% else %}
            <p>Aucun détail trouvé.</p>
        {% endif %}

    </section>

</main>
{{ include('footer.php')}}</body></html>

