import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-liste',
  standalone: true,
  imports: [FormsModule],
  templateUrl: './liste.component.html',
  styleUrl: './liste.component.scss',
})
export class ListeComponent {
  categories: {
    nom: string;
    elements: string[];
  }[] = [];

  urlSaisie: string = '';

  ngOnInit() {
    const categoriesEnregistre = localStorage.getItem('categories');

    //si il n'y a pas de catégories enregistré : on les initialises
    if (categoriesEnregistre == null) {
      this.categories = [
        { nom: 'Top', elements: [] },
        { nom: 'Bien', elements: [] },
        { nom: 'Bof', elements: [] },
        { nom: 'Nul', elements: [] },
        { nom: 'Horrible', elements: [] },
      ];
    } else {
      this.categories = JSON.parse(categoriesEnregistre);
    }
  }

  onAjoutElement() {
    if (this.urlSaisie != '') {
      this.categories[0].elements.push(this.urlSaisie);

      this.urlSaisie = '';

      localStorage.setItem('categories', JSON.stringify(this.categories));
    }
  }

  onSupprimeElement(
    categorieElementSupprime : {nom : string; elements : string[];},
    indexElementSupprime : number
  ) {

      categorieElementSupprime.elements.splice(indexElementSupprime, 1);
      localStorage.setItem('categories', JSON.stringify(this.categories));

     
  }

  onChangeCategorie(indexCategorie : number, indexElement : number, monte : boolean) {
    const element = this.categories[indexCategorie].elements[indexElement];

    this.categories[indexCategorie].elements.splice(indexElement, 1);

    this.categories[indexCategorie + (monte ? -1 : 1)].elements.push(element);
    localStorage.setItem('categories', JSON.stringify(this.categories));

  }
}