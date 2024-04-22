import { HttpClient } from '@angular/common/http';
import { Component, inject } from '@angular/core';


@Component({
  selector: 'app-accueil',
  standalone: true,
  imports: [],
  templateUrl: './accueil.component.html',
  styleUrl: './accueil.component.scss'
})
export class AccueilComponent {
  http: HttpClient = inject(HttpClient);

  ngOnInit() {
  this.http
  .get('http://localhost/backend_angular/articles.php')
  .subscribe((resultat) => console.log(resultat));
  }
}
