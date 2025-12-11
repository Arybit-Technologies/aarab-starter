# AARAB Starter

Minimal, runnable demo of AARAB — an autonomous AI research agent running a **70B-class model offline** in under 5 minutes.

Built in Nairobi, Kenya. Sovereign AI for Africa.

![AARAB demo screenshot](https://i.imgur.com/EXAMPLE.png)  
*(Replace with your actual screenshot once you have one)*

## Features
- Runs Llama 3.1 70B (Q4_K_M) or Qwen2.5 72B locally with Ollama
- Uses the **Veritas** persona (fact-checking & validation specialist)
- Simple PHP frontend + API backend
- Fully offline — no cloud, no API keys
- <2-second inference on a single RTX 4090

## Quick Start (5 minutes)

### Prerequisites
- Docker & Docker Compose
- Ollama installed (or run via Docker)

### Run locally

```bash
git clone https://github.com/Arybit-Technologies/aarab-starter.git
cd aarab-starter

# Start Ollama + PHP app
docker compose up -d

# Visit http://localhost:8080
```

### Or run Ollama manually

```bash
ollama pull llama3.1:70b-q4_K_M
php -S 0.0.0.0:8000 -t public
```

Open http://localhost:8000 — type a research question and watch Veritas answer.

## Why we open-sourced this
We want to show the world that powerful, ethical AI can be built and run locally in Africa — no foreign cloud required.

## Coming soon
- More personas (20+ total)
- Knowledge graph integration
- Full multi-agent pipeline

Built with ❤️ in Nairobi by Arybit Technologies  
Follow us on X: [@arybittech](https://x.com/arybittech)

MIT License
```
