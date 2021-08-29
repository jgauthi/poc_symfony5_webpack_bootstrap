import { Controller } from 'stimulus';

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="dossierlist" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * dossierlist_controller.js -> "Hello..."
 */
export default class extends Controller {
    connect() {
        this.element.textContent = 'Hello here, message from Stimulus!';
    }
}
