import { Controller } from '@hotwired/stimulus';

/*
* The following line makes this controller "lazy": it won't be downloaded until needed
* See https://github.com/symfony/stimulus-bridge#lazy-controllers
*/
/* stimulusFetch: 'lazy' */
export default class extends Controller {
    static values = { activeIndex: Number }

    connect() {
        this.slides = this.element.querySelectorAll('.carousel-slide');
        this.update();
    }

    prev() {
        this.activeIndexValue = (this.activeIndexValue - 1 + this.slides.length) % this.slides.length;
    }

    next() {
        this.activeIndexValue = (this.activeIndexValue + 1) % this.slides.length;
    }

    update() {
        const offset = -this.activeIndexValue * 100;
        this.element.querySelector('.carousel-track').style.transform = `translateX(${offset}%)`;
    }

    activeIndexValueChanged() {
        this.update();
    }
}
