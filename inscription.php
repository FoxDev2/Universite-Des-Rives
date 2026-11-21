<?php
session_start();
include 'includes/head.php';
include 'includes/navbar.php';
include 'includes/sub-nav-inscription.php';

// echo '<pre>';
// var_dump($_SESSION['errors'] ?? []);
// echo '</pre>';
?>

<main class="mx-auto max-w-4xl px-4 py-8">



  <form
    action="config/traitement.php"
    method="POST"
    enctype="multipart/form-data"
    class="space-y-6"
    novalidate>
    <!-- 1. État civil → table etudiants -->
    <section class="bloc">
      <h2>État civil</h2>
      <p class="aide">
        Ces informations doivent correspondre à votre pièce d’identité.
      </p>
      <div class="grid gap-4 sm:grid-cols-6">
        <div class="sm:col-span-2">
          <label class="label" for="civilite">Civilité *</label>
          <select id="civilite" name="civilite" class="champ">
            <option value="">Choisir…</option>
            <option value="M">Monsieur</option>
            <option value="F">Madame</option>
            <option value="A">Autre</option>
          </select>
          <?php
          if (isset($_SESSION['errors']['civilite'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['civilite']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['civilite']); ?>
        </div>



        <div class="sm:col-span-2">
          <label class="label" for="nom">Nom *</label>
          <input
            id="nom"
            name="nom"
            type="text"
            maxlength="60"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['nom'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['nom']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['nom']); ?>

        </div>
        <div class="sm:col-span-2">
          <label class="label" for="prenom">Prénom *</label>
          <input
            id="prenom"
            name="prenom"
            type="text"
            maxlength="60"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['prenom'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['prenom']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['prenom']); ?>

        </div>
        <div class="sm:col-span-2">
          <label class="label" for="date_naissance">Date de naissance *</label>
          <input
            id="date_naissance"
            name="date_naissance"
            type="date"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['date_naissance'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['date_naissance']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['date_naissance']); ?>


        </div>
        <div class="sm:col-span-2">
          <label class="label" for="lieu_naissance">Lieu de naissance *</label>
          <input
            id="lieu_naissance"
            name="lieu_naissance"
            type="text"
            maxlength="80"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['lieu_naissance'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['lieu_naissance']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['lieu_naissance']); ?>

        </div>
        <div class="sm:col-span-2">
          <label class="label" for="nationalite">Nationalité *</label>
          <input
            id="nationalite"
            name="nationalite"
            type="text"
            maxlength="60"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['nationalite'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['nationalite']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['nationalite']); ?>


        </div>
        <div class="sm:col-span-3">
          <label class="label" for="situation_familiale">Situation familiale</label>
          <select
            id="situation_familiale"
            name="situation_familiale"
            class="champ">
            <option value="celibataire">Célibataire</option>
            <option value="marie">Marié(e)</option>
            <option value="autre">Autre</option>
          </select>

          <?php
          if (isset($_SESSION['errors']['situation_familiale'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['situation_familiale']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['situation_familiale']); ?>


        </div>
        <div class="sm:col-span-3">
          <label class="label" for="piece_identite">Numéro de pièce d’identité *</label>
          <input
            id="piece_identite"
            name="piece_identite"
            type="text"
            maxlength="30"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['piece_identite'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['piece_identite']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['piece_identite']); ?>


        </div>
      </div>
    </section>

    <!-- 2. Coordonnées → table etudiants / adresses -->
    <section class="bloc">
      <h2>Coordonnées</h2>
      <p class="aide">
        Nous utiliserons ces informations pour vous envoyer la confirmation
        d’inscription.
      </p>
      <div class="grid gap-4 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label class="label" for="email">Adresse e-mail *</label>
          <input
            id="email"
            name="email"
            type="email"
            maxlength="120"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['email'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['email']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['email']); ?>


        </div>
        <div class="sm:col-span-3">
          <label class="label" for="telephone">Téléphone *</label>
          <input
            id="telephone"
            name="telephone"
            type="tel"

            placeholder="90000000"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['telephone'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['telephone']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['telephone']); ?>


        </div>
        <div class="sm:col-span-6">
          <label class="label" for="adresse">Adresse *</label>
          <input
            id="adresse"
            name="adresse"
            type="text"
            maxlength="150"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['adresse'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['adresse']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['adresse']); ?>


        </div>
        <div class="sm:col-span-2">
          <label class="label" for="code_postal">Code postal</label>
          <input
            id="code_postal"
            name="code_postal"
            type="text"
            maxlength="10"
            class="champ" />

          <?php
          if (isset($_SESSION['errors']['code_postal'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['code_postal']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['code_postal']); ?>


        </div>
        <div class="sm:col-span-2">
          <label class="label" for="ville">Ville *</label>
          <input
            id="ville"
            name="ville"
            type="text"
            maxlength="80"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['ville'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['ville']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['ville']); ?>


        </div>
        <div class="sm:col-span-2">
          <label class="label" for="pays">Pays *</label>
          <input
            id="pays"
            name="pays"
            type="text"
            maxlength="60"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['pays'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['pays']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['pays']); ?>


        </div>
      </div>
    </section>

    <!-- 3. Parcours scolaire → table parcours_scolaire -->
    <section class="bloc">
      <h2>Parcours scolaire</h2>
      <p class="aide">
        Indiquez votre dernier diplôme obtenu et votre dernier
        établissement.
      </p>
      <div class="grid gap-4 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label class="label" for="type_bac">Type de baccalauréat *</label>
          <select id="type_bac" name="type_bac" class="champ" required>
            <option value="">Choisir…</option>
            <option value="A">Série A (littéraire)</option>
            <option value="C">Série C (mathématiques)</option>
            <option value="D">Série D (sciences)</option>
            <option value="G">Série G (gestion)</option>
            <option value="technologique">Technologique</option>
            <option value="autre">Autre</option>
          </select>

          <?php
          if (isset($_SESSION['errors']['type_bac'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['type_bac']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['type_bac']); ?>


        </div>
        <div class="sm:col-span-3">
          <label class="label" for="annee_bac">Année d’obtention *</label>
          <input
            id="annee_bac"
            name="annee_bac"
            type="number"
            min="1990"
            max="2026"
            maxlength="4"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['annee_bac'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['annee_bac']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['annee_bac']); ?>


        </div>
        <div class="sm:col-span-4">
          <label class="label" for="etablissement_precedent">Dernier établissement fréquenté *</label>
          <input
            id="etablissement_precedent"
            name="etablissement_precedent"
            type="text"
            maxlength="120"
            class="champ"
            required />

          <?php
          if (isset($_SESSION['errors']['etablissement_precedent'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['etablissement_precedent']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['etablissement_precedent']); ?>


        </div>
        <div class="sm:col-span-2">
          <label class="label" for="moyenne">Moyenne générale (/20)</label>
          <input
            id="moyenne"
            name="moyenne"
            type="number"
            min="0"
            max="20"
            step="0.01"
            class="champ" />

          <?php
          if (isset($_SESSION['errors']['moyenne'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['moyenne']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['moyenne']); ?>

        </div>
        <div class="sm:col-span-6">
          <label class="label" for="mention">Mention</label>
          <select id="mention" name="mention" class="champ">
            <option value="aucune">Aucune</option>
            <option value="passable">Passable</option>
            <option value="assez_bien">Assez bien</option>
            <option value="bien">Bien</option>
            <option value="tres_bien">Très bien</option>
          </select>

          <?php
          if (isset($_SESSION['errors']['mention'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['mention']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['mention']); ?>


        </div>
      </div>
    </section>

    <!-- 4. Choix de formation → tables inscriptions / filieres -->
    <section class="bloc">
      <h2>Formation souhaitée</h2>
      <p class="aide">
        En base de données, la filière sera une clé étrangère vers la table
        <code>filieres</code>.
      </p>
      <div class="grid gap-4 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label class="label" for="faculte">Faculté *</label>
          <select id="faculte" name="faculte" class="champ" required>
            <option value="">Choisir…</option>
            <option value="1">Sciences et technologies</option>
            <option value="2">Droit et sciences politiques</option>
            <option value="3">Économie et gestion</option>
            <option value="4">Lettres et sciences humaines</option>
            <option value="5">Médecine et santé</option>
          </select>

          <?php
          if (isset($_SESSION['errors']['faculte'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['faculte']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['faculte']); ?>


        </div>
        <div class="sm:col-span-3">
          <label class="label" for="filiere">Filière *</label>
          <select id="filiere" name="filiere" class="champ" required>
            <option value="">Choisir…</option>
            <option value="1">Informatique</option>
            <option value="2">Mathématiques</option>
            <option value="3">Physique-Chimie</option>
            <option value="4">Droit privé</option>
            <option value="5">Gestion des entreprises</option>
            <option value="6">Anglais</option>
            <option value="7">Sciences infirmières</option>
          </select>

          <?php
          if (isset($_SESSION['errors']['filiere'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['filiere']['filiere']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['filiere']); ?>

        </div>
        <div class="sm:col-span-2">
          <label class="label" for="niveau">Niveau d’entrée *</label>
          <select id="niveau" name="niveau" class="champ" required>
            <option value="L1">Licence 1</option>
            <option value="L2">Licence 2</option>
            <option value="L3">Licence 3</option>
            <option value="M1">Master 1</option>
            <option value="M2">Master 2</option>
          </select>


          <?php
          if (isset($_SESSION['errors']['niveau'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['niveau']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['niveau']); ?>


        </div>
        <div class="sm:col-span-2">
          <label class="label" for="annee_academique">Année académique *</label>
          <select
            id="annee_academique"
            name="annee_academique"
            class="champ"
            required>
            <option value="2026-2027">2026-2027</option>
            <option value="2027-2028">2027-2028</option>
          </select>

          <?php
          if (isset($_SESSION['errors']['annee_academique'])) : ?>
            <p class="text-red-800 my-2"><?php echo htmlspecialchars($_SESSION['errors']['annee_academique']); ?></p>
          <?php endif;
          unset($_SESSION['errors']['annee_academique']); ?>


        </div>
        <!-- <fieldset class="sm:col-span-2">
              <legend class="label">Régime *</legend>
              <div class="mt-2 flex gap-5">
                <label class="flex items-center gap-2 text-sm"
                  ><input
                    type="radio"
                    name="regime"
                    value="initial"
                    checked
                    class="accent-brand"
                  />
                  Initial</label
                >
                <label class="flex items-center gap-2 text-sm"
                  ><input
                    type="radio"
                    name="regime"
                    value="alternance"
                    class="accent-brand"
                  />
                  Alternance</label
                >
              </div>
            </fieldset> -->
        <fieldset class="sm:col-span-6">
          <legend class="label">Options complémentaires</legend>
          <div class="mt-2 flex flex-wrap gap-x-6 gap-y-2">
            <label class="flex items-center gap-2 text-sm"><input
                type="checkbox"
                name="options[]"
                value="logement"
                class="accent-brand" />
              Résidence universitaire</label>
            <label class="flex items-center gap-2 text-sm"><input
                type="checkbox"
                name="options[]"
                value="restauration"
                class="accent-brand" />
              Restaurant universitaire</label>
            <label class="flex items-center gap-2 text-sm"><input
                type="checkbox"
                name="options[]"
                value="transport"
                class="accent-brand" />
              Transport</label>
            <label class="flex items-center gap-2 text-sm"><input
                type="checkbox"
                name="options[]"
                value="bourse"
                class="accent-brand" />
              Demande de bourse</label>
          </div>
        </fieldset>
      </div>
    </section>

    <!-- 5. Tuteur → table tuteurs (relation 1-N avec etudiants) -->
    <section class="bloc">
      <h2>Responsable légal ou personne à contacter</h2>
      <p class="aide">
        En cas d’urgence ou pour le suivi financier du dossier.
      </p>
      <div class="grid gap-4 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label class="label" for="tuteur_nom">Nom et prénom *</label>
          <input
            id="tuteur_nom"
            name="tuteur_nom"
            type="text"
            maxlength="120"
            class="champ"
            Année d’obtention *
            ￼
            Dernier établissement fréquenté *
            required />
        </div>
        <div class="sm:col-span-3">
          <label class="label" for="tuteur_lien">Lien de parenté *</label>
          <select
            id="tuteur_lien"
            name="tuteur_lien"
            class="champ"
            required>
            <option value="pere">Père</option>
            <option value="mere">Mère</option>
            <option value="tuteur">Tuteur</option>
            <option value="conjoint">Conjoint(e)</option>
            <option value="autre">Autre</option>
          </select>
        </div>
        <div class="sm:col-span-3">
          <label class="label" for="tuteur_tel">Téléphone *</label>
          <input
            id="tuteur_tel"
            name="tuteur_tel"
            type="tel"
            maxlength="20"
            class="champ"
            required />
        </div>
        <div class="sm:col-span-3">
          <label class="label" for="tuteur_profession">Profession</label>
          <input
            id="tuteur_profession"
            name="tuteur_profession"
            type="text"
            maxlength="80"
            class="champ" />
        </div>
      </div>
    </section>

    <!-- 6. Documents → upload de fichiers ($_FILES) -->
    <section class="bloc">
      <h2>Pièces justificatives</h2>
      <p class="aide">
        Formats acceptés : PDF, JPG ou PNG, 2 Mo maximum par fichier.
      </p>
      <div class="grid gap-4 sm:grid-cols-2">
        <div>
          <label class="label" for="photo">Photo d’identité *</label>
          <input
            id="photo"
            name="photo"
            type="file"
            accept="image/jpeg,image/png"
            required
            class="block w-full text-sm file:mr-3 file:rounded-md file:border-0 file:bg-accent file:px-3 file:py-2 file:text-white hover:file:bg-accent-dark" />
        </div>
        <div>
          <label class="label" for="releve_bac">Relevé de notes du bac *</label>
          <input
            id="releve_bac"
            name="releve_bac"
            type="file"
            accept=".pdf,image/jpeg,image/png"
            required
            class="block w-full text-sm file:mr-3 file:rounded-md file:border-0 file:bg-accent file:px-3 file:py-2 file:text-white hover:file:bg-accent-dark" />
        </div>
        <div>
          <label class="label" for="piece_scan">Pièce d’identité (scan) *</label>
          <input
            id="piece_scan"
            name="piece_scan"
            type="file"
            accept=".pdf,image/jpeg,image/png"
            required
            class="block w-full text-sm file:mr-3 file:rounded-md file:border-0 file:bg-accent file:px-3 file:py-2 file:text-white hover:file:bg-accent-dark" />
        </div>
        <div>
          <label class="label" for="acte_naissance">Acte de naissance</label>
          <input
            id="acte_naissance"
            name="acte_naissance"
            type="file"
            accept=".pdf,image/jpeg,image/png"
            class="block w-full text-sm file:mr-3 file:rounded-md file:border-0 file:bg-accent file:px-3 file:py-2 file:text-white hover:file:bg-accent-dark" />
        </div>
      </div>
    </section>

    <!-- 7. Compte + validation → hachage avec password_hash() -->
    <!-- <section class="bloc">
          <h2>Compte étudiant</h2>
          <p class="aide">
            Vous utiliserez ces identifiants pour suivre votre dossier. Le mot
            de passe sera hashé avant stockage.
          </p>
          <div class="grid gap-4 sm:grid-cols-2">
            <div>
              <label class="label" for="mot_de_passe">Mot de passe *</label>
              <input
                id="mot_de_passe"
                name="mot_de_passe"
                type="password"
                minlength="8"
                autocomplete="new-password"
                class="champ"
                required
              />
              <p class="mt-1 text-xs text-slate-500">8 caractères minimum.</p>
            </div>
            <div>
              <label class="label" for="mot_de_passe_confirm"
                >Confirmer le mot de passe *</label
              >
              <input
                id="mot_de_passe_confirm"
                name="mot_de_passe_confirm"
                type="password"
                minlength="8"
                autocomplete="new-password"
                class="champ"
                required
              />
            </div>
          </div>
          <div class="mt-5 space-y-2">
            <label class="flex items-start gap-2 text-sm"
              ><input
                type="checkbox"
                name="certifie"
                value="1"
                required
                class="mt-1 accent-brand"
              />
              Je certifie que les informations fournies sont exactes. *</label
            >
            <label class="flex items-start gap-2 text-sm"
              ><input
                type="checkbox"
                name="reglement"
                value="1"
                required
                class="mt-1 accent-brand"
              />
              J’ai lu et j’accepte le règlement intérieur de l’université.
              *</label
            >
          </div>
        </section> -->

    <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
      <button
        type="reset"
        class="rounded-md border border-slate-300 bg-white px-5 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 cursor-pointer">
        Effacer le formulaire
      </button>
      <button
        type="submit"
        name="submit"
        class="rounded-md bg-accent px-6 py-2.5 text-sm font-semibold text-white hover:bg-accent-dark focus:outline-none focus:ring-2 focus:ring-accent/40 cursor-pointer">
        Envoyer mon inscription
      </button>
    </div>
  </form>
</main>

<?php include 'includes/footer.php'; ?>