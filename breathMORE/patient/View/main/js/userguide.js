
      const tour = new Shepherd.Tour({
  useModalOverlay: true,
  defaultStepOptions: {
    classes: 'shadow-md bg-purple-dark',
    scrollTo: true
  }
});

tour.addStep({
  id: 'ufindDoctor',
  text: 'This is the page you can find doctors in our hospital',
  attachTo: {
    element: '.ufindDoctor',
    on: 'bottom'
  },
  buttons: [
    {
      text: 'Next',
      action: tour.next
    }
  ]
});

tour.addStep({
    id: 'upharmacy',
    text: 'This is the page you can find easily pharmacies addresses',
    attachTo: {
      element: '.upharmacy',
      on: 'bottom'
    },
    buttons: [
      {
        text: 'Next',
        action: tour.next
      }
    ]
  });


  tour.addStep({
    id: 'uUserGuide',
    text: 'This is the page you can look how to use this website.',
    attachTo: {
      element: '.uUserGuide',
      on: 'bottom'
    },
    buttons: [
      {
        text: 'Next',
        action: tour.next
      }
    ]
  });


  tour.addStep({
    id: 'uEmergency',
    text: 'This is the page you can easily find emergency address and cantact numbers.',
    attachTo: {
      element: '.uEmergency',
      on: 'bottom'
    },
    buttons: [
      {
        text: 'Next',
        action: tour.next
      }
    ]
  });

   tour.addStep({
    id: 'uAppointment',
    text: 'This is the page you can easily and quickly take an appointment.',
    attachTo: {
      element: '.uAppointment',
      on: 'bottom'
    },
    buttons: [
      {
        text: 'Next',
        action: tour.next
      }
    ]
  });

  tour.addStep({
    id: 'uBloodDonation',
    text: 'This is the page you can quickly fill information for blood donation.',
    attachTo: {
      element: '.uBloodDonation',
      on: 'bottom'
    },
    buttons: [
      {
        text: 'Next',
        action: tour.next
      }
    ]
  });


  tour.addStep({
    id: 'uHome',
    text: 'This is the home page every information is gathering here.',
    attachTo: {
      element: '.uHome',
      on: 'bottom'
    },
    buttons: [
      {
        text: 'Next',
        action: tour.next
      }
    ]
  });

  tour.addStep({
    id: 'uAbout',
    text: 'This is the page you can read about our services.',
    attachTo: {
      element: '.uAbout',
      on: 'bottom'
    },
    buttons: [
      {
        text: 'Next',
        action: tour.next
      }
    ]
  });


  tour.addStep({
    id: 'uCenter',
    text: 'This is the page you can read about our centers in hospital.',
    attachTo: {
      element: '.uCenter',
      on: 'bottom'
    },
    buttons: [
      {
        text: 'Next',
        action: tour.next
      }
    ]
  });


  tour.addStep({
    id: 'uBlogs',
    text: 'This is the page you can read blogs about health.',
    attachTo: {
      element: '.uBlogs',
      on: 'bottom'
    },
    buttons: [
      {
        text: 'Next',
        action: tour.next
      }
    ]
  });




  tour.addStep({
    id: 'uProfile',
    text: 'This is the button you can go to your profile.',
    attachTo: {
      element: '.uProfile',
      on: 'bottom'
    },
    buttons: [
      {
        text: 'Next',
        action: tour.next
      }
    ]
  });

  tour.addStep({
    id: 'uSubscribe',
    text: 'This is the button you can click if you want to know our upcoming events, we will send you information.',
    attachTo: {
      element: '.uSubscribe',
      on: 'left'
    },
    buttons: [
      {
        text: 'Next',
        action: tour.next
      }
    ]
  });




      tour.start();
   