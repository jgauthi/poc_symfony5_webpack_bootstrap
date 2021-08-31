import { Controller } from 'stimulus';

export default class extends Controller {
  static targets = ['details']; // Change content on div data-dossierlist-target="details"

  async getDetails(event) {
    const id = event.target.getAttribute('data-id');
    const response = await fetch( "/dossier/ajax/details/" + id);

    this.detailsTarget.innerHTML = await response.text();
  }
}
