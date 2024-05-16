import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Component, inject } from '@angular/core';
import { FormBuilder, FormGroup, FormsModule, ReactiveFormsModule, Validators } from '@angular/forms';
import { MatButtonModule } from '@angular/material/button';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatIconModule } from '@angular/material/icon';
import { MatInputModule } from '@angular/material/input';
import { ActivatedRoute, Router } from '@angular/router';
import { Article } from '../accueil/models/Article.type';

@Component({
  selector: 'app-edit-article',
  standalone: true,
  imports: [MatInputModule, MatFormFieldModule, MatButtonModule, FormsModule, ReactiveFormsModule, HttpClientModule, MatIconModule],
  templateUrl: './edit-article.component.html',
  styleUrl: './edit-article.component.scss'
})
export class EditArticleComponent {

  FichierSelectione : File | null = null;
  prixMinium : number = 0.01;

  http : HttpClient = inject(HttpClient)
  formBuilder: FormBuilder = inject(FormBuilder);
  router : Router = inject(Router);
  route : ActivatedRoute = inject(ActivatedRoute);

  formulaire : FormGroup = this.formBuilder.group({
    nom : ['',[Validators.required, Validators.minLength(3), Validators.maxLength(100)]],
    description : ['',[]],
    prix : [1,[Validators.required, Validators.min(this.prixMinium) ]],
  }
  );
id:number | null = null;
urlimage : string | null  = null;
imageSupprime : boolean = false;
miniature : string | null = null;

ngOnInit() {
   this.route.params.subscribe((ParametreUrl) => {
    if (ParametreUrl['id']) {
      if(!isNaN(ParametreUrl['id'])) {
        this.id= ParametreUrl['id'];

        this.http.get<Article>(
          `http://localhost/backend_angular/article.php?id=${this.id}`
        )
        .subscribe((article) => {
          this.formulaire.patchValue(article)
          this.urlimage= article.image;
        });
      }else {
        alert(ParametreUrl['id'] + " n'est pas un identifiant valide")
      }   
    }else {
      console.log("c'est un ajout");
    }
  });
}
  onSubmit() {
    if (this.formulaire.valid) {

      const jwt = localStorage.getItem("jwt");

      if(jwt!=null) {

      const donnees: FormData = new FormData();
      const article = this.formulaire.value;
      article.imageSupprime = this.imageSupprime;

      donnees.append('article', JSON.stringify(article));

      if(this.FichierSelectione) {
        donnees.append('image', this.FichierSelectione);
      }
      

      const url = this.id == null 
      ? `http://localhost/backend_angular/ajout_article.php`
      : `http://localhost/backend_angular/modifier_article.php?id=${this.id}`;


      this.http
        .post(url, donnees,    {
          headers: {Authorization:jwt}
        }
        )
        .subscribe({
          next: (resultat) => this.router.navigateByUrl('/accueil'),
          error: (resultat) => alert(resultat.error.message ? resultat.error.message :'erreur inconnue veuillez conctacter l\'administrateur'),
        });
    }
  }
  }

  onFichierSelectionee(evenement :any){
    this.FichierSelectione= evenement.target.files[0];
    this.urlimage =null;
    evenement.target.value =null;

    if (this.FichierSelectione != null) {
    let reader = new FileReader();

    reader.onload = (e :any) => {
    this.miniature=e.target.result;
  };
  reader.readAsDataURL(this.FichierSelectione);
  }
}

  
  onSuppressionImage() {

    if(this.urlimage!=null){
      this.imageSupprime = true;

    }
    this.urlimage =null;
    this.FichierSelectione = null;
    this.miniature = null;

  }
}

