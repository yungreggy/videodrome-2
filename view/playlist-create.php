{{ include('header.php', {title: 'Créer une Playlist'}) }}
<body>
    <div class="container">
        <h1>Créer une nouvelle Playlist</h1>
        <form action="{{ path }}playlist/store" method="post">
            <div class="form-group">
                <label for="nom_playlist">Nom de la playlist</label>
                <input type="text" id="nom_playlist" name="nom_playlist" required class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required class="form-control"></textarea>
            </div>
            <div class="form-group">
                <p>La fonctionnalité d'ajout de films à la playlist est en construction.</p>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</body>

{{ include('footer.php') }}

