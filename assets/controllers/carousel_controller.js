import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
    static targets = ["slide"];

    connect() {
        this.currentIndex = 0;
    }

    next() {
        this.hideSlide(this.currentIndex);
        this.currentIndex = (this.currentIndex + 1) % this.slideTargets.length;
        this.showSlide(this.currentIndex);
    }

    prev() {
        this.hideSlide(this.currentIndex);
        this.currentIndex =
            (this.currentIndex - 1 + this.slideTargets.length) % this.slideTargets.length;
        this.showSlide(this.currentIndex);
    }

    showSlide(index) {
        const slide = this.slideTargets[index];
        slide.classList.remove("opacity-0");
        slide.classList.add("opacity-100");
    }

    hideSlide(index) {
        const slide = this.slideTargets[index];
        slide.classList.remove("opacity-100");
        slide.classList.add("opacity-0");
    }
}
