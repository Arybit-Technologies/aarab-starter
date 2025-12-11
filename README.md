# AARAB Starter

Minimal, runnable demo of AARAB — an autonomous AI research agent running a **70B-class model offline** in under 5 minutes.

Built in Nairobi, Kenya. Intelligent AI.

![AARAB demo screenshot](https://aarab.arybit.co.ke/img/ai_core_svg_logo_screenshot.png)

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
git clone [https://github.com/Arybit-Technologies/aarab-starter.git](https://github.com/Arybit-Technologies/aarab-starter.git)
cd aarab-starter

# Start Ollama + PHP app
docker compose up -d

# Visit http://localhost:8080
