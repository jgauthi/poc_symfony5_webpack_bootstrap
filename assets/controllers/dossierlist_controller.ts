import { Controller } from 'stimulus';

export default class extends Controller {
  static targets: string[] = ['details'];
  private detailsTarget: HTMLInputElement;

  async getDetails(event) {
    const
      id = event.target.getAttribute('data-id'),
      response = await fetch(`/dossier/ajax/details/${id}`);

    this.detailsTarget.innerHTML = await response.text();
  }
}
