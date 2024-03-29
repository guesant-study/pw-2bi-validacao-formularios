import { Config } from '@stencil/core';

export const config: Config = {
  namespace: 'pw-web-components',
  outputTargets: [
    {
      type: 'dist',
      esmLoaderPath: '../loader',
    },
    {
      type: 'dist-custom-elements',
    },
    {
      type: 'docs-readme',
    },
    {
      type: 'www',
      serviceWorker: null, // disable service workers
    },

    {
      type: 'dist',
      buildDir: '../../www/js',
    },
  ],
  testing: {
    browserHeadless: 'new',
  },
};
