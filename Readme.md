Wordset Dictionary
==================

From 2015-2017, Wordset.org provided a public interface for anyone to help
collaborate on the world's first open source, collaborative dictionary.

However, due to... well, *cough* lack of interest... we decided to shutdown
the project.

Here we are providing the final, most up-to-date release of the Wordset
Dictionary. I'll answer some questions inline about the data and what you can
do about it.

How can I read it?
==================

The `data` folder contains a file for every letter, and one for 'misc' (that
includes emoji!).

Each file has a big JSON object keyed by the words themselves. A sample
entry might look like this:

```
{
    "largely": {
        "word": "largely",
        "wordset_id": "54bd55df7265742391cf0000",
        "meanings": [{
            "id": "54bd55df7265742391d10000",
            "def": "in large part",
            "speech_part": "adverb",
            "synonyms": ["mostly", "for the most part"]
        }, {
            "id": "54bd55df7265742391d20000",
            "def": "on a large scale",
            "example": "the sketch was so largely drawn that you could see it from the back row",
            "speech_part": "adverb"
        }]
    }
}
```

Hopefully, most of it is pretty self-explainatory.

Here's another entry that includes some labels on the meanings.

```
{
    "lindy": {
        "word": "lindy",
        "wordset_id": "54bd567d72657423915c0d02",
        "labels": [{
            "name": "American",
            "is_dialect": true
        }],
        "meanings": [{
            "id": "54bd567d72657423915e0d02",
            "def": "an energetic American dance that was popular in the 1930s, probably named for the aviator Charles Lindbergh",
            "example": "Can you lindy?",
            "speech_part": "noun",
            "synonyms": ["lindy hop"]
        }],
        "editors": ["lefurjah"],
        "contributors": ["odd_bloke", "zellerpress", "malrase", "hcatlin"]
    }
}
```

What can I use it for?
======================

Anything! We're giving this to the world. If you need a basic english Dictionary
then no sense in paying for fees, this is definitely good enough for almost
all uses.

We'd LOVE to see adapters for different languages using this. Or, if you have
an idea of something you want to do, hit us up! We're still around on the
internet and happy to help!

Is it Complete?
===============

Alas, nothing is ever complete. However, we started the project by utilizing
the Princeton WordNet project, and then made many thousands of modifications
of that. But, with 177k words, and 63,936 manual edits by volunteers it's as
complete as it will be.

What about WordNet?
===================

Most open source projects use WordNet for simple dictionary usages, but we
have vastly improved and modified that original source to be something much
more human friendly.

Also, WordNet takes a long time to grok, this is some pretty human-readable
stuff.

Did I mention that this is all in JSON?

Is It Racist/Sexist/Whatever?
=============================

We've had several projects on the site to try and mitigate some of the more,
uh, problematic entries. However, we didn't get to everything. WordNet, the
original source of the material, sourced *their* data from many different
sources. As their goal was to power machine learning and word-maps,
the definitions were often not handled with much care.

So, you can definitely find some stuff in here that we should update. In fact,
it's not too late... feel free to put in a PR if you want to edit something.
Can't guarantee we'll have a lot of time to check it out, but at least it will
be something!

Gender Neutral
==============

After several months of working on the dictionary, we realized how many stupidly
and uselessly gendered example sentences there were. We have several write-ups
about the project, but we decided to go through every single sentence that
included a gendered pronoun and re-write it.

We found this *drastically* improved the quality of the content and in almost
every case was a huge step up. "They went to the store" instead of "She went
to the store".

Editorial Guidelines
=======================

I've included the original editorial guidelines in `Guidelines.md`, but note
that since we didn't edit every word in the dictionary, that not all of them
are strictly followed.

Contributors
============

Wordset was founded by Hampton Lintorn Catlin <hcatlin> and Michael Lintorn
Catlin <malrase>, and we were joined by Justin Lefurjah <lefurjah> in making
this project a reality.

Justin, in fact, was by far our largest contributor. He was personally
responsible for 97 new words and 7,460 edits!

Also, we had a TON of volunteers, who worked for hours and hours improving
this dictionary.

Special thanks to msingle, sabreuse, bryanedu, zellerpress, luxfactaest,
lauradhahn, odd_bloke, musicchild, jessecurry, joshuabriggs, brilliantskip,
and luciankahn for all their hard work!.
