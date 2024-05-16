import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Component, inject } from '@angular/core';
import { MatButtonModule } from '@angular/material/button';
import {MatCardModule} from '@angular/material/card';
import {MatIconModule} from '@angular/material/icon';
import { RouterLink } from '@angular/router';
import { Article } from './models/Article.type';


@Component({
  selector: 'app-accueil',
  standalone: true,
  imports: [HttpClientModule, MatCardModule, MatButtonModule, MatIconModule, RouterLink],
  templateUrl: './accueil.component.html',
  styleUrl: './accueil.component.scss'
})
export class AccueilComponent {
  http: HttpClient = inject(HttpClient);

  listearticles : Article[] = [
    
  ];


  ngOnInit(){
    this.refreshListeArticle()
  }

  refreshListeArticle() {
    const jwt = localStorage.getItem("jwt");

    if (jwt != null) {
    this.http
     .get<Article[]>('http://localhost/backend_angular/articles.php', 
     {
      headers: {Authorization:jwt}
    }
  )
     .subscribe((resultat) => this.listearticles = resultat);
  }else {

    alert ("vous n'etes pas connecté");
  }
  }

  onSuppressionArticle(idArticle? : number) {
    this.http.delete('http://localhost/backend_angular/supprimer_article.php?id='+ idArticle)
    .subscribe((resultat) =>this.refreshListeArticle());
  }
}
