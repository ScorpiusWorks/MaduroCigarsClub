import { defineCollection, z } from 'astro:content';
import { glob } from 'astro/loaders';

const evenimente = defineCollection({
  loader: glob({ pattern: '**/*.{md,mdx}', base: './src/content/evenimente' }),
  schema: z.object({
    title: z.string(),
    date: z.coerce.date(),
    coverImage: z.string(),
    gallery: z.array(z.string()),
    description: z.string().optional(),
    location: z.string().optional(),
  }),
});

export const collections = {
  evenimente,
};

