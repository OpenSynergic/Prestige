import Tick from '@pqina/flip';

document.addEventListener('alpine:init', () => {
	Alpine.data('flip', (date) => ({
		date: date ? new Date(date) : undefined,
		tick: undefined,
		counter: undefined,
		init(){
			this.tick = Tick.DOM.create(this.$el, {
				credits: false,
				didInit: (tick) => {
					if (this.date) {
						this.counter = Tick.count.down(this.date);
						this.counter.onupdate = (value) => {
							tick.value = value;
						};
						this.counter.onended = () => {
							// redirect, uncomment the next line
							// window.location = 'my-location.html'
							// hide counter, uncomment the next line
							tick.root.style.display = 'none';
							// show message, uncomment the next line
							// document.querySelector('.tick-onended-message').style.display = '';
						};
					}
				}
			});
		}
	}))
})